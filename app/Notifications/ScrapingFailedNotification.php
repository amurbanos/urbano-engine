<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ScrapingFailedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected string $errorMessage;

    public function __construct(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Erro no Scraping de Produtos')
            ->greeting('Olá,')
            ->line('Ocorreu um erro durante o processo de scraping de produtos.')
            ->line('Detalhes do erro:')
            ->line($this->errorMessage)
            ->line('Por favor, verifique os logs do sistema para mais informações.')
            ->action('Acessar Telescope', url('/telescope'))
            ->line('Obrigado!');
    }
}
