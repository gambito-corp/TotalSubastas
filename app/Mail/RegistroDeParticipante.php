<?php

namespace App\Mail;

use App\Helpers\Gambito;
use App\Producto;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class RegistroDeParticipante extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $producto;
    public $ruta;
    public $metodo;
    /**
     * @var string
     */
    public $imagen;

    /**
     * Create a new message instance.
     *
     * @param User $user
     */
    public function __construct(User $user, $producto, $metodo)
    {
        $this->user = $user;
        $this->producto = $producto;
        $hash = Gambito::hash($this->producto->id);
        $this->ruta = env('APP_URL').'/auction/id/'.$hash;
        $this->metodo = $metodo;
        $this->imagen = env('APP_URL').'/producto/'.Gambito::hash($this->producto->id);




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
