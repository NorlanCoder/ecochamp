<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PanierPaid extends Notification
{
    use Queueable;

    private object $facture;

    /**
     * Create a new notification instance.
     */
    public function __construct(object $facture)
    {
        $this->facture = $facture;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        
        $url = url("/facture/". $this->facture->id);
 
        return (new MailMessage)
                    ->greeting('Hello!')
                    ->line('Une de vos factures a été payée !')
                    ->lineIf($this->facture->prix_tt > 0, "Montant payé: {$this->facture->prix_tt}")
                    ->action('Voir la facture', $url)
                    ->line('Merci d\'avoir utilisé notre application Ecochamp pour vos achats en ligne!');
     }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
