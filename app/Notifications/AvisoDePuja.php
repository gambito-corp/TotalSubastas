<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Mail\AvisoDePuja as Aviso;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class AvisoDePuja extends Notification
{
    use Queueable;

    public $producto;
    public $user;

    /**
     * Create a new notification instance.
     *
     * @param $producto
     * @param $user
     */
    public function __construct($user, $producto)
    {
        //
        $this->producto = $producto;
        $this->user = $user;
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
     * @return Aviso
     */
    public function toMail($notifiable)
    {
        return (new Aviso($this->user, $this->producto,'get'))->to($this->user->email);
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
