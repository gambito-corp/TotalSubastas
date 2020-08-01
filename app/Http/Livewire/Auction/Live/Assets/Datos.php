<?php

namespace App\Http\Livewire\Auction\Live\Assets;

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

    protected $listeners = ['echo:canal-ejemplo,ejemplo' => 'noop'];

    public function mount(Producto $producto, VehicleDetail $vehiculo)
    {
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

    public function noop()
    {
        $this->ganador = $this->producto->Usuario->name;
        $this->emit('estado');
    }

    public function render()
    {
        return view('livewire.auction.live.assets.datos');
    }
}
