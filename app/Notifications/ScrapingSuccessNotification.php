<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ScrapingSuccessNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $importResult;

    public function __construct($importResult)
    {
        $this->importResult = $importResult;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Scraping de Produtos Concluído')
            ->greeting('Olá,')
            ->line('O processo de scraping de produtos foi concluído com sucesso!')
            ->line("Total de produtos importados: {$this->importResult['imported_products']}. Total de produtos atualizados: {$this->importResult['updated_products']}")
            ->action('Ver Produtos', url('/admin/products'))
            ->line('Obrigado!');
    }
}
