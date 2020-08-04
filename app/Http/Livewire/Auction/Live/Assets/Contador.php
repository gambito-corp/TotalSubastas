<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Message;
use Livewire\Component;

class Contador extends Component
{
    public $mensajes;

    /**
     * @var mixed
     */
    public $identificador;

    public function mount($mensajes, $identificador)
    {
        $this->identificador = $identificador;
        $this->mensajes = count($mensajes);
    }

    protected function getListeners()
    {
        return [
            "echo-private:contador.{$this->identificador},ContadorEvent"  => 'cuenta',
        ];
    }

    public function cuenta($event)
    {
        $this->mensajes += $event['contador'];
    }

    public function render()
    {
        return view('livewire.auction.live.assets.contador');
    }
}
