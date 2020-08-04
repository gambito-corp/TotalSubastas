<?php

namespace App\Http\Livewire\Auction\Live\Assets;

use App\Helpers\Gambito;
use App\Producto;
use App\VehicleDetail;
use Livewire\Component;

class Datos extends Component
{


    public $producto;

    public $vehiculo;

    public $razon_social;

    public $year;

    public $logo;

    public $comision;

    public $ganador;

    public $garantia;

    public $nombre;

    public $tipo;

    public $identificador;


    public function mount(Producto $producto, VehicleDetail $vehiculo, $identificador)
    {
        $this->identificador = $identificador;
        $this->producto = $producto;
        $this->vehiculo = $vehiculo;
        $this->razon_social = $producto->Lote->Empresa->razon_social;
        $this->year = $vehiculo->year;
        $this->logo = $producto->Lote->Empresa->imagen;
        $this->comision = $producto->comision;
        $this->ganador = $producto->Usuario->name;
        $this->garantia = $producto->garantia;
        $this->nombre = $producto->nombre;
        $this->tipo = $producto->tipo_subasta;
    }

    protected function getListeners()
    {
        return [
            "echo-private:subasta.{$this->identificador},SubastaEvent" => 'noop',
        ];
    }

    public function noop($event)
    {
        $this->ganador = $event['user']['name'];
        $this->emit('estado');
    }

    public function render()
    {
        return view('livewire.auction.live.assets.datos');
    }
}
