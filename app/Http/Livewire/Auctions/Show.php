<?php

namespace App\Http\Livewire\Auctions;

use Livewire\Component;

class Show extends Component
{
    public $idVehiculo = '';
    public $hola = 'hola';

    // public function mount($id)
    // {
    //     $id = $hashids->decode($id);        
    //     $this->idVehiculo = $id;
    // }

    public function render()
    {
        return view('livewire.auctions.show');
    }
}
