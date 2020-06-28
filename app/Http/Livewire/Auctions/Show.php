<?php

namespace App\Http\Livewire\Auctions;

use Composer\DependencyResolver\Request;
use Livewire\Component;
use Hashids\Hashids;

class Show extends Component
{
    public $idVehiculo = '';
    public $hola = 'hola';

     public function mount(Hashids $id)
     {
//         dd($id, request());
//         $id = Hashids::decode($id);
//         $this->idVehiculo = $id;
//         dd($id);
     }

    public function render()
    {
        return view('livewire.auctions.show');
    }
}
