<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Message;
use Livewire\Component;

class Mensajes extends Component
{
    public $mensajes;

    public $identificador;

    public $actual;

    public function mount($mensajes, $identificador)
    {
        $this->identificador = $identificador;
        $this->mensajes = Message::with('Usuario')->where('producto_id', $this->identificador)->get()->toArray();
//        dd($this->mensajes);
    }

    protected function getListeners()
    {
        return [
            "echo-private:mensaje.{$this->identificador},MensajeEvent" => 'Mensajes',
        ];
    }

    public function Mensajes($event)
    {
        $this->mensajes[] = $event['mensaje'];
    }

    public function render()
    {
        return view('livewire.auction.live.assets.mensajes');
    }
}
