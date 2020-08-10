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
    /**
     * @var int|mixed
     */
    public $parent_id1;
    /**
     * @var int|mixed
     */
    public $parent_id2;
    /**
     * @var int|mixed
     */
    public $parent_id3;


    public function mount(Address $direccion)
    {
        $this->direccion = $direccion;
        $this->usuarios = User::all();
        $this->usuario = $this->usuarios->where('id', $this->direccion->user_id)->first();
        $this->pais = Country::where('id', 1)->get();
        $this->paises = Country::where('parent_id', null)->get();
        $this->departamentos = Country::where('parent_id', 1)->get();
        $this->provincias = Country::where('parent_id', 3)->get();
        $this->distrito = Country::where('parent_id', 5)->get();
        $this->parent_id1 = 1;
        $this->parent_id2 = 1;
        $this->parent_id3 = 1;

    }

    public function render()
    {
        return view('livewire.admin.form.direcciones.update');
    }
}
