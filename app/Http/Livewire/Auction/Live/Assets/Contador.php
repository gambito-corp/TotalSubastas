<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\ActiveAuc;
use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use Livewire\Component;

class Contador extends Component
{
    public $mensajes;
    public $tiempo;
    public $inicio;
    public $ahora;

    /**
     * @var mixed
     */
    public $identificador;
    /**
     * @var mixed
     */
    public $participantes;

    public function mount($mensajes, $identificador)
    {
        $this->identificador = $identificador;
        $this->tiempo = Producto::where('id', $this->identificador)->first();
        $this->tiempo = $this->tiempo->started_at->diffInSeconds(now());
        $this->inicio = Producto::where('id', $this->identificador)->first()->started_at->toTimeString();
        $this->ahora = now()->toTimeString();
        $this->participantes = ActiveAuc::where('producto_id', $this->identificador)->count();
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
        $this->participantes = $event['participantes'];
        $this->mensajes += $event['contador'];
    }

    public function render()
    {
        return view('livewire.auction.live.assets.contador');
    }
}
