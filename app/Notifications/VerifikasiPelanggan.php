<?php

namespace App\Notifications;

use Firebase\JWT\JWT;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifikasiPelanggan extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
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
        $key = env('VALIDATE_KEY');
        $payload = [
            'id_pelanggan' => $notifiable->id_pelanggan,
            'nama' => $notifiable->nama,
            'email' => $notifiable->email
        ];
        $jwt_token = JWT::encode($payload, $key, 'HS256');
        
        return (new MailMessage)
                    ->line('Berikut link verifikasi untuk melanjutkan.')
                    ->action('Verifikasi', url('/verify-account?&token='.$jwt_token.'&state=0&acc_type=customer'))
                    ->line('Terimakasih telah menggunakan aplikasi kami!');
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
