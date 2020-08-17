<?php

namespace App\Http\Livewire\Admin\Form\Imagen;

use App\Lot;
use App\Producto;
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
        $this->empresas = $empresas;
        $this->lotes = $lotes;
        $this->productos = $productos;
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
