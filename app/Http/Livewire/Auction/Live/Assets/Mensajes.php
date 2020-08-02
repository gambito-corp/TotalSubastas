<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Message;
use Livewire\Component;

class Mensajes extends Component
{
    public $mensajes;

    protected $listeners = ['echo:canal-ejemplo,ejemplo' => 'noop'];

    public function mount($mensajes)
    {
        $id = Gambito::hash(request()->route()->parameter('id'), true);
        $this->mensajes = Message::where('producto_id', $id)->get();
    }

    public function noop()
    {
        $this->mensajes = Message::where('producto_id', $this->mensajes->first()->producto_id)->get();
    }

    public function render()
    {
        return view('livewire.auction.live.assets.mensajes');
    }
}
