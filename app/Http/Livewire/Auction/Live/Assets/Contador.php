<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Message;
use Livewire\Component;

class Contador extends Component
{
    public $mensajes;

    protected $listeners = ['echo:canal-ejemplo,ejemplo' => 'noop'];
    /**
     * @var mixed
     */
    public $identificador;

    public function mount($mensajes)
    {
        $this->identificador =  Gambito::hash(request()->route()->parameter('id'),true);
        $this->mensajes = count($mensajes);
    }

    public function noop()
    {
        $mensajes = Message::where('producto_id', $this->identificador)->get();
        $this->mensajes = count($mensajes);
    }

    public function render()
    {
        return view('livewire.auction.live.assets.contador');
    }
}
