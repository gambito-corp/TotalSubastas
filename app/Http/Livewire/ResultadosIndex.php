<?php

namespace App\Http\Livewire;

use App\Company;
use Livewire\Component;

class ResultadosIndex extends Component
{

    public $resultado = [];
    public $Rempresa;

    protected$listeners = ['search' => 'buscado'];

    public function mount()
    {
        $this->Rempresa = new Company();
    }

    public function buscado(Company $empresa)
    {
        $this->resultado = $empresa;
        $this->Rempresa = $this->resultado->nombre;

    }

    public function render()
    {
        return view('livewire.resultados-index');
    }
}
