<?php

namespace App\Http\Livewire;

use App\Company;
use Livewire\Component;

class Filtro extends Component
{

    public $empresas = '';

    public function mount()
    {
        

    }




    public function render()
    {
        return view('livewire.filtro');
    }
}
