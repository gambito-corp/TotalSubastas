<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Message;
use Livewire\Component;

class Mensajes extends Component
{
    public $mensajes;

    protected $listeners = ['echo:canal-ejemplo,ejemplo' => 'noop'];
    /**
     * @var mixed
     */
    public $identificador;

    public function mount($mensajes)
    {
        $this->identificador = Gambito::hash(request()->route()->parameter('id'), true);
        $this->mensajes = Message::where('producto_id', $this->identificador)->get();
    }

    public function noop()
    {
        $this->mensajes = Message::where('producto_id', $this->identificador)->get();
    }

    public function render()
    {
        return view('livewire.auction.live.assets.mensajes');
    }
}
