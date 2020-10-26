<?php

namespace App\Http\Livewire\Form;

use App\Country;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Direccion extends Component
{
    public $pais = [];
    public $departamento = [];
    public $provincia = [];
    public $distrito = [];



    public $paises;
    public $parent_id1;
    public $parent_id2;
    public $nombre;
    public $descripcion;
    public $codigo;
    public $usuarios;
    public $parent_id3;
    public $dir1;
    public $numero;
    public $dir2;

    public function mount()
    {
        $this->pais = [];
        $this->departamento = [];
        $this->provincia = [];
        $this->distrito = [];
        if(Cache::get('pais') == null){
            $this->pais = Country::where('parent_id', Cache::get('pais'))->get();
        }else{
            $this->pais = Country::where('id', Cache::get('pais'))->get();
        }
//        Cache::put('pais', old('pais'));
//        Cache::put('departamento', old('departamento'));
//        Cache::put('provincia', old('provincia'));
//        Cache::put('distrito', old('distrito'));
//
//        $pais = Cache::get('pais');
//        $departamento = Cache::get('departamento');
//        $provincia = Cache::get('provincia');
//        $distrito = Cache::get('distrito');
//
//
//        $this->pais = Country::with('Parent')
//            ->where('id', 1)
//            ->get();
//        $this->paises = Country::with('Parent')
//            ->where('parent_id',$pais)
//            ->get();
//        $this->departamentos = Country::with('Parent')
//            ->where('parent_id', $departamento)
//            ->get();
//        $this->provincias = Country::with('Parent')
//            ->where('parent_id', $provincia)
//            ->get();
//        $this->distrito = Country::with('Parent')
//            ->where('parent_id', $distrito)
//            ->get();
//        $this->parent_id1 = 1;
//        $this->parent_id2 = 1;
//        $this->parent_id3 = 1;
    }

    public function updatedPais()
    {

        Cache::put('pais', $this->pais);
        $this->pais = Country::where('id',  Cache::get('pais'))->get();
        $this->departamento = Country::where('parent_id',  Cache::get('pais'))->get();
//         = $departamento;
//        dd($this->departamento);
        //        dd($this->pais);
    }

//    public function updatedParentid1()
//    {
//        $departamentos = Country::with('Parent')
//            ->where('parent_id', $this->parent_id1)
//            ->get();
//        $this->departamentos = $departamentos;
//    }
//
//    public function updatedParentid2()
//    {
//        $provincias = Country::with('Parent')
//            ->where('parent_id', $this->parent_id2)
//            ->get();
//        $this->provincias = $provincias;
//    }
//
//    public function updatedParentid3()
//    {
//        $distritos = Country::with('Parent')
//            ->where('parent_id', $this->parent_id3)
//            ->get();
//        $this->distrito = $distritos;
//    }

    public function render()
    {
        return view('livewire.form.direccion');
    }
}
