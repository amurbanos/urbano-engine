<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\{SerializesModels, InteractsWithQueue};
use Illuminate\Support\Facades\Log;
use App\Notifications\{ScrapingSuccessNotification, ScrapingFailedNotification};
use App\Services\ScraperService;
use Filament\Notifications\Notification as FilamentNotification;

class ScrapeProductsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public int $tries = 3;
    public int $backoff = 60;
    public $uniqueFor = 3600;
    public $adminUser;
    public $timeout = 120; // Tempo máximo de execução em segundos (2 minutos)
    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->adminUser = User::where('email', 'admin@gmail.com')->first();
    }

    /**
     * Execute the job.
     */
    public function handle(ScraperService $scraperService)
    {
        try {
            Log::info('Iniciando scraping...');
            
            $result = $scraperService->scrape();

            $this->adminUser->notify(new ScrapingSuccessNotification($result));

            FilamentNotification::make()
                ->title('Sincronização Concluída')
                ->body('O processo de sincronização de produtos foi finalizado com sucesso.')
                ->success()
                ->sendToDatabase($this->adminUser);

            Log::info('Scraping concluído com sucesso!');
        } catch (\Exception $e) {
            Log::error("Erro ao processar o scraping: " . $e->getMessage());
    
            $this->adminUser->notify(new ScrapingFailedNotification($e->getMessage()));

            throw $e;
        }
    }
}
