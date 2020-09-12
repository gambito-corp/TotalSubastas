<?php

namespace App\Http\Livewire\Form;

use App\Country;
use Livewire\Component;

class Direccion extends Component
{
    public $paises;
    public $parent_id1;
    public $pais;
    public $departamentos;
    public $provincias;
    public $parent_id2;
    public $nombre;
    public $descripcion;
    public $codigo;
    public $usuarios;
    public $distrito;
    public $parent_id3;
    public $dir1;
    public $numero;
    public $dir2;

    public function mount()
    {
        $this->pais = Country::with('Parent')
            ->where('id', 1)
            ->get();
        $this->paises = Country::with('Parent')
            ->where('parent_id', null)
            ->get();
        $this->departamentos = Country::with('Parent')
            ->where('parent_id', 1)
            ->get();
        $this->provincias = Country::with('Parent')
            ->where('parent_id', 3)
            ->get();
        $this->distrito = Country::with('Parent')
            ->where('parent_id', 5)
            ->get();
        $this->parent_id1 = 1;
        $this->parent_id2 = 1;
        $this->parent_id3 = 1;
    }

    public function updatedParentid1()
    {
        $departamentos = Country::with('Parent')
            ->where('parent_id', $this->parent_id1)
            ->get();
        $this->departamentos = $departamentos;
    }

    public function updatedParentid2()
    {
        $provincias = Country::with('Parent')
            ->where('parent_id', $this->parent_id2)
            ->get();
        $this->provincias = $provincias;
    }

    public function updatedParentid3()
    {
        $distritos = Country::with('Parent')
            ->where('parent_id', $this->parent_id3)
            ->get();
        $this->distrito = $distritos;
    }

    public function render()
    {
        return view('livewire.form.direccion');
    }
}
