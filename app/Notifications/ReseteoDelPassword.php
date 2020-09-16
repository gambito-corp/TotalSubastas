<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Mail\ReseteoDelPassword as reset;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReseteoDelPassword extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
     * @return reset
     */
    public function toMail($notifiable)
    {
        return (new reset($notifiable, $this->token, 'get'))->to($notifiable->email);
//        return (new MailMessage)->view('mail.resetPass',
//        [
//            'user'      => $notifiable,
//            'token'     => $this->token,
//        ])->subject('Olvido Su Contraseña de '.env('APP_NAME'));
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

        ];
    }
}
