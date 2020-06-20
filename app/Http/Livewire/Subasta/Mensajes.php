<?php

namespace App\Http\Livewire\Subasta;

use App\Message;
use Livewire\Component;

class Mensajes extends Component
{
    protected $listeners = ['Pujar' => 'Pujado'];
    public $mensaje;

    public function mount(Message $mensaje)
    {
        $this->mensaje = $mensaje;
    }


    public function Pujado()
    {

    }
    public function render()
    {
        return view('livewire.subasta.mensajes');
    }
}
