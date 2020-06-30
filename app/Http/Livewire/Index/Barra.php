<?php

namespace App\Http\Livewire\Index;

use App\Company;
use Livewire\Component;

class Barra extends Component
{
    public $empresas = [];

    public function mount($empresas)
    {
        $this->empresas = $empresas;
    }
    public function render()
    {
        return view('livewire.index.barra');
    }
}
