<?php

namespace App\Http\Livewire\Admin\Form\Imagen;

use App\Company;
use App\LegalPerson;
use App\Lot;
use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Update extends Component
{
    public $empresas;
    public $lotes;
    public $productos;
    public $empresa;
    public $lote;
    public $actual;

    public function mount ($empresas, $lotes, $productos, $dato)
    {
        $this->actual = $dato;
        if (Auth::user()->isAdmin()) {
            $this->empresas = $empresas;
            $this->lotes = $lotes;
            $this->productos = $productos;
        }
        if (Auth::user()->OnlyEmpresa()) {
            $juridica = LegalPerson::where('id', Auth::id())->first();
            $company = Company::with('Lotes',)->where('persona_juridica_id', $juridica->id)->first();
            $productos = Producto::where('empresa_id', $company->id)->get();
            $this->empresas = $company;
            $this->lotes = $this->empresas->Lotes;

            $this->productos = $productos;
        }
    }

    public function updatedEmpresa()
    {
        $this->lotes = Lot::where('empresa_id', $this->empresa)->get();
    }

    public function updatedLote()
    {
        $this->productos = Producto::where('lote_id', $this->lote)->get();
    }
    public function render()
    {
        return view('livewire.admin.form.imagen.update');
    }
}
