<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StatusWin extends Component
{
    /**
     * @var mixed
     */
    public $producto;

    public $identificador;



    public function mount(Producto $producto, $identificador)
    {
        $this->identificador = $identificador;
        $this->producto = $producto->load('Usuario')->toArray();
    }

    protected function getListeners()
    {
        return [
            "echo-private:datos.{$this->identificador},DatosEvent" => 'noop',
        ];
    }

    public function noop($event)
    {
//        dd($event['producto']);
        $this->producto['usuario']['name'] = $event['producto']['usuario']['name'];
        $this->producto['precio'] = $event['producto']['precio'];
        $this->status($event['producto']['usuario']['name'], $event['producto']['precio']);
    }

    public function status($nombre, $precio)
    {
        $this->producto['usuario']['name'] = $this->ganador = Gambito::obtenerProducto($this->identificador)->Usuario->name;
        $this->producto['precio'] = $this->ganador = Gambito::obtenerProducto($this->identificador)->precio;
    }

    public function render()
    {
        return view('livewire.auction.live.assets.status-win');
    }
}
