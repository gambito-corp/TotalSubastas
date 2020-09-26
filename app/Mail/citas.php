<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class citas extends Mailable
{
    use Queueable, SerializesModels;

    protected $admin;
    public $request;
    public $data;
    public $user;
    public $metodo;
    public $ruta;
    public $producto;

    /**
     * Create a new message instance.
     *
     * @param $request
     * @param $producto
     * @param $user
     * @param $admin
     */
    public function __construct($request, $producto, $user, $admin)
    {
        $this->request = $request;
        $this->user = $user;
        $this->admin = $admin;
        $this->metodo = 'get';
        $this->ruta = '';
        $this->producto = $producto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->admin == 'admin'){
            return $this->view('mail.citas')->subject('Mensaje de Citas de TotalSubastas');
        }else{
            return $this->view('mail.citasUser')->subject('Mensaje de Citas de TotalSubastas');
        }
    }
}
