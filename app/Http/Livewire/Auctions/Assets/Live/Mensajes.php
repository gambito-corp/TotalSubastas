<?php

namespace App\Http\Livewire\Auctions\Assets\Live;

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
        dd($mensaje);
    }

    public function render()
    {
        return view('livewire.auctions.assets.live.mensajes');
    }
}
