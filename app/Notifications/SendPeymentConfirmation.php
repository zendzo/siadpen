<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendPeymentConfirmation extends Notification
{
    use Queueable;

    protected $pambayaran;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Pembayaran Telah Dikonfirmasi')
                    ->line('Pembayaran Anda Pada Tanggal '.$this->pembayaran->pay_date)
                    ->line('Total '.$this->pembayaran->total)
                    ->line('Telah Dikonfirmasi ')
                    ->action('Cek Status', url('/siswa/'.$this->pembayaran->siswa->user->profile->nis))
                    ->line('Terimakasih!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
