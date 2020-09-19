<?php

namespace App\Mail;

use App\Producto;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class RegistroDeParticipante extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $producto;

    /**
     * Create a new message instance.
     *
     * @param Auth $user
     * @param Producto $producto
     */
    public function __construct(Auth $user, Producto $producto)
    {
        $this->user = $user;
        $this->producto = $producto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.RegistroDeParticipante');
    }
}
