<?php

namespace App\Mail;

use App\Helpers\Gambito;
use App\Person;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UsuarioRegristrado extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $hash;
    public $ruta;
    public $metodo;

    public function __construct(User $user, $metodo = 'post')
    {
        $this->user = $user;
        $this->hash = Gambito::hash($this->user->id);
        $this->ruta = env('APP_URL').'/confirmar/usuario';
        $this->metodo = $metodo;
        dd($this->metodo);
    }

    public function build()
    {
        return $this->markdown('mail.usuarioRegistrado');
    }
}
