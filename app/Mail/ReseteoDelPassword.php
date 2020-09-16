<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReseteoDelPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var User
     */
    public $user;
    public $token;
    public $ruta;
    public $metodo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $token, $metodo = 'post')
    {
        $this->user = $user;
        $this->token = $token;
        $this->ruta = env('APP_URL').'/password/reset/'.$token;
        $this->metodo = $metodo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.resetPass');
    }
}
