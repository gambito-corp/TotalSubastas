<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contacto extends Mailable
{
    use Queueable, SerializesModels;

    public $ruta;
    public $metodo;
    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(Array $data)
    {
        $this->data = $data;
        $this->metodo = 'get';
        $this->ruta = '';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contacto')->subject('Mensaje de Contacto de TotalSubastas');
    }
}
