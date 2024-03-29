<?php

namespace App\Notifications;

use App\Producto;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\RegistroDeParticipante as Registro;
use Illuminate\Notifications\Messages\MailMessage;

class RegistroDeParticipante extends Notification
{
    use Queueable;

    public $user;
    public $producto;

    /**
     * Create a new notification instance.
     *
     * @param User $user
     * @param Producto $producto
     */
    public function __construct(User $user, Producto $producto)
    {
        $this->user = $user;
        $this->producto = $producto;
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
     * @return Registro
     */
    public function toMail($notifiable)
    {
        return (new Registro($this->user, $this->producto, 'get'))->to($this->user->email);
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
