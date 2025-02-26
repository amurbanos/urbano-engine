<?php

namespace App\Console\Commands;

use App\Services\ScraperService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

// PRECISO ADICIONAR MAIS EFICIENCIA
class ScrapeProducts extends Command
{
    protected $signature = 'scrape:products';
    protected $description = 'Scrape de produtos do Mercado Livre';
    protected ScraperService $scraperService;

    public function __construct(ScraperService $scraperService)
    {
        parent::__construct();
        $this->scraperService = $scraperService;
    }

    public function handle()
    {
        $this->info('Iniciando scraping...');
        if ($this->scraperService->scrape()) {
            $this->info('Scraping concluído com sucesso!');
        } else {
            $this->error('Erro ao acessar a URL.');
        }
    }
}
