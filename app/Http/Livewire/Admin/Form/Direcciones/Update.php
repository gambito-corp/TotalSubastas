<?php

namespace App\Http\Livewire\Admin\Form\Direcciones;

use App\Address;
use App\Country;
use App\User;
use Livewire\Component;

class Update extends Component
{
    public $usuarios;
    public $direccion;
    public $usuario;
    public $provincias;
    public $pais;
    public $paises;
    public $departamentos;
    public $distrito;
    public $parent_id1;
    public $parent_id2;
    public $parent_id3;

    public function mount(Address $direccion)
    {
        $this->direccion = $direccion;
        $this->usuarios = User::with('Rol', 'ranking')
            ->get();
        $this->usuario = $this->usuarios
            ->where('id', $this->direccion->user_id)
            ->first();
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
        $provincias = Country::with('Parent')
            ->where('parent_id', $this->parent_id3)
            ->get();
        $this->distrito = $provincias;
    }

    public function render()
    {
        return view('livewire.admin.form.direcciones.update');
    }
}
