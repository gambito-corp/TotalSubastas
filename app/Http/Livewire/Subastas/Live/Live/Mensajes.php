<?php

namespace App\Http\Livewire\Subastas\Live\Live;

use Livewire\Component;

class Mensajes extends Component
{
    public $data;
    protected $listeners = ['Pujar'];

    public function mount($data)
    {
        $this->data = $data;
    }

    public function Pujar($mensaje)
    {
        $this->data = $mensaje;
    }

    public function render()
    {
        return view('livewire.subastas.live.live.mensajes');
    }
}
