<?php

namespace App\Http\Livewire\Auctions\Assets\Live;

use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $data;
    public $pujar;
    public $estado;
    public $vehiculo = '';
    public $producto= '';

    public function mount($data)
    {
        $this->data = $data;
        $this->pujar = $data['producto']->precio + $data['producto']->puja;
        $this->producto = $data['producto'];
        $this->vehiculo = $data['vehiculo'];
    }




    public function render()
    {
        return view('livewire.auctions.assets.live.header');
    }
}
