<?php

namespace App\Services;

use App\Jobs\ScrapeProductsJob;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\{Http, RateLimiter, Log};
use App\Models\Product;

class ScraperService
{
    private string $baseUrl;
    private const MAX_RETRIES = 3;
    private const BATCH_SIZE = 10;
    private const RATE_LIMIT_KEY = 'scrape-limit';
    private const WAITING_SECONDS = 60;
    private const MAX_ATTEMPS = 10;

    private const DEFAULT_USER_AGENT = [
        'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
        'Accept-Language' => 'pt-BR,pt;q=0.9,en;q=0.8',
        'Referer' => 'https://www.mercadolivre.com.br/',
    ];

    public function __construct()
    {
        $this->baseUrl = env('BASE_URL_ECOMMERCE', 'https://www.mercadolivre.com.br');
    }

    public function dispatchJob()
    {
        ScrapeProductsJob::dispatch()->onQueue('scraping');
    }

    public function scrape()
    {
        $page = 1;
        $lastPage = null;
    
        do {
            $url = "{$this->baseUrl}/ofertas?page={$page}";
    
            if (!RateLimiter::remaining(self::RATE_LIMIT_KEY, maxAttempts: self::MAX_ATTEMPS)) {
                Log::warning("Rate limit atingido! Aguardando ".self::WAITING_SECONDS." segundos antes de continuar o scraping.");
                sleep(self::WAITING_SECONDS);
            }

            RateLimiter::hit(self::RATE_LIMIT_KEY);
    
            $response = $this->fetchPage($url);
    
            if (!$response) {
                return ['updated_products' => 0, 'imported_products' => 0];
            }
    
            $crawler = new Crawler($response->body());
    
            if ($lastPage === null) {
                $lastPage = $this->extractLastPage($crawler);
                Log::info("Número total de páginas detectado: {$lastPage}");
            }
    
            $products = $this->extractProducts($crawler);
    
            if (!empty($products)) {
                collect($products)->chunk(self::BATCH_SIZE)->each(function ($chunk) {
                    Product::upsert(
                        $chunk->toArray(),
                        ['name'],
                        ['price', 'old_price', 'discount', 'installments', 'image_url', 'seller', 'link', 'shipping', 'updated_at']
                    );
                });
            }
    
            Log::info("SCRAP PAGINA {$page} CONCLUIDO!");
    
            $page++;
        } while ($page <= $lastPage);
    
        return [
            'updated_products' => count($products),
            'imported_products' => count($products),
        ];
    }

    /**
     * Extrai dinamicamente o número total de páginas da paginação
     */
    private function extractLastPage(Crawler $crawler): int
    {
        $lastPage = 1;

        $crawler->filter('.andes-pagination__button a')->each(function ($node) use (&$lastPage) {
            $pageNumber = filter_var($node->text(), FILTER_VALIDATE_INT);
            if ($pageNumber !== false) {
                $lastPage = max($lastPage, $pageNumber);
            }
        });

        return $lastPage;
    }

    /**
     * Realiza a requisição HTTP com re-tentativas em caso de falha
     */
    private function fetchPage(string $url)
    {
        $attempts = 0;

        while ($attempts < self::MAX_RETRIES) {
            $response = Http::withHeaders(self::DEFAULT_USER_AGENT)->get($url);

            if ($response->successful()) {
                return $response;
            }

            Log::warning("Tentativa {$attempts} falhou ao acessar {$url}. Retentando...");
            sleep(seconds: self::WAITING_SECONDS);
            $attempts++;
        }

        Log::error("Erro ao acessar a URL após {$attempts} tentativas: {$url}");
        return null;
    }

    private function extractProducts(Crawler $crawler): array
    {
        $products = [];

        $crawler->filter('.andes-card.poly-card')->each(function ($node) use (&$products) {
            try {
                $products[] = [
                    'name' => $this->extractText($node, '.poly-component__title', 'Nome não disponível'),
                    'price' => $this->extractNumeric($node, '.poly-price__current .andes-money-amount__fraction'),
                    'old_price' => $this->extractNumeric($node, '.andes-money-amount--previous .andes-money-amount__fraction'),
                    'discount' => $this->extractDiscount($node)."%",
                    'installments' => $this->extractText($node, '.poly-price__installments', 'Sem parcelas'),
                    'image_url' => $this->extractAttribute($node, '.poly-card__portada img', 'data-src', ''),
                    'seller' => $this->extractText($node, '.poly-component__seller', 'Vendedor desconhecido'),
                    'link' => $this->extractAttribute($node, '.poly-component__title', 'href', '#'),
                    'shipping' => $this->extractText($node, '.poly-component__shipping', 'Frete não informado'),
                    'updated_at' => now(),
                ];
            } catch (\Exception $e) {
                Log::error("Erro ao processar um produto: " . $e->getMessage());
            }
        });

        return $products;
    }

    private function extractText(Crawler $node, string $selector, string $default = ''): string
    {
        return $node->filter($selector)->count()
            ? trim($node->filter($selector)->text())
            : $default;
    }

    private function extractNumeric(Crawler $node, string $selector, float $default = 0): float
    {
        return $node->filter($selector)->count()
            ? floatval(str_replace(['.', ','], ['', '.'], $node->filter($selector)->text()))
            : $default;
    }

    private function extractAttribute(Crawler $node, string $selector, string $attribute, string $default = ''): string
    {
        return $node->filter($selector)->count()
            ? $node->filter($selector)->attr($attribute)
            : $default;
    }

    private function extractDiscount(Crawler $node): string
    {
        $discountText = $this->extractText($node, '.andes-money-amount__discount', '');
        return preg_match('/(\d+)%/', $discountText, $matches) ? "{$matches[1]}%" : "0%";
    }
}
