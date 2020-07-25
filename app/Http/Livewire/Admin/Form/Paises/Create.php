<?php

namespace App\Http\Livewire\Admin\Form\Paises;

use App\Country;
use Livewire\Component;

class Create extends Component
{
    /**
     * @var mixed
     */
    public $paises;
    /**
     * @var int|mixed
     */
    public $parent_id1;
    /**
     * @var Country|mixed
     */
    public $pais;
    /**
     * @var mixed
     */
    public $departamentos;
    /**
     * @var mixed
     */
    public $provincias;
    /**
     * @var int|mixed
     */
    public $parent_id2;
    /**
     * @var mixed|string
     */
    public $nombre;
    /**
     * @var mixed|string
     */
    public $descripcion;
    /**
     * @var mixed|string
     */
    public $codigo;


    public function mount()
    {
        $this->pais = Country::where('id', 1)->get();

        $this->paises = Country::where('parent_id', null)->get();
        $this->departamentos = Country::where('parent_id', 1)->get();
        $this->provincias = Country::where('parent_id', 3)->get();
        $this->parent_id1 = 1;
        $this->parent_id2 = 1;
        $this->nombre = '';
        $this->descripcion = '';
        $this->codigo = '';
    }

    public function updatedParentid1()
    {
        $departamentos = Country::where('parent_id', $this->parent_id1)->get();
        $this->departamentos = $departamentos;
    }

    public function updatedParentid2()
    {
        $provincias = Country::where('parent_id', $this->parent_id2)->get();
        $this->provincias = $provincias;
    }
    public function render()
    {
        return view('livewire.admin.form.paises.create');
    }
}
