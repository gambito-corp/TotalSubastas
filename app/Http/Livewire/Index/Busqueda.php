<?php

namespace App\Http\Livewire\Index;

use App\Company;
use App\Producto;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class Busqueda extends Component
{
//    METODO CERRADO 100%
    /**
     * @var mixed
     */
    public $buscar = '';
    /**
     * @var mixed
     */
    public $empresas = [];
    /**
     * @var mixed
     */
    public $picked;
    /**
     * @var mixed
     */
    public $precioMin;
    /**
     * @var mixed
     */
    public $precioMax;
    /**
     * @var mixed
     */
    public $memoria;
    /**
     * @var mixed
     */
    public $ciudad;
    /**
     * @var mixed
     */
    public $tipoV;
    /**
     * @var mixed
     */
    public $tipoR;
    /**
     * @var mixed
     */
    public $select;

    public function mount($empresas)
    {
        $this->memoria = 120;
        $this->picked = true;
        $this->empresas = $empresas;
        $this->precioMax = 1000000;
        $this->select = Producto::all();
    }

    public function updatedBuscar()
    {
        if(Cache::has('buscar')){
            Cache::forget('buscar');
        }
        if($this->buscar != ''){
            Cache::put('buscar', $this->buscar, $this->memoria);
        }
        if(Cache::has('buscar')) {
            $this->buscar == Cache::get('buscar');
        }
        $this->General();
    }

    public function updatedPrecioMin()
    {
        if(Cache::has('Min')){
            Cache::forget('Min');
        }
        if($this->precioMin != 0){
            Cache::put('Min', intval($this->precioMin), $this->memoria);
        }
        if(Cache::has('Min')) {
            $this->precioMin == Cache::get('Min');
        }
        $this->General();
    }

    public function updatedPrecioMax()
    {
        if(Cache::has('Max')){
            Cache::forget('Max');
        }
        if($this->precioMax != 1 || $this->precioMax != 1000000 ){
            Cache::put('Max', intval($this->precioMax), $this->memoria);
        }elseif($this->precioMax == 0 ){
            Cache::put('Max', 1000000, $this->memoria);
        }
        if(Cache::has('Max')) {
            $this->precioMax == Cache::get('Max');
        }
        $this->General();
    }

    public function updatedCiudad()
    {
        if(Cache::has('ciudad') || $this->ciudad == '+'){
            Cache::forget('ciudad');
        }
        if($this->ciudad != ''){
            Cache::put('ciudad', $this->ciudad, $this->memoria);
        }
        if(Cache::has('ciudad')) {
            $this->ciudad == Cache::get('ciudad');
        }
        $this->General();
    }

    public function updatedTipoR()
    {
        if(Cache::has('tipoR')){
            Cache::forget('tipoR');
        }
        if($this->tipoR != '' || $this->tipoR == false){
            Cache::put('tipoR', $this->tipoR, $this->memoria);
        }
        if(Cache::has('tipoR')) {
            $this->tipoR == Cache::get('tipoR');
        }
        $this->General();
    }

    public function TipoV($tipoV)
    {
        if(Cache::has('tipoV')){
            Cache::forget('tipoV');
        }
        $this->tipoV = $tipoV;
        if($this->tipoV != ''){
            Cache::put('tipoV', $this->tipoV, $this->memoria);
        }
        $this->General();
    }

    protected function General()
    {
        $this->emit('buscarEmpresas');
    }

    public function asignarEmpresa($nombre)
    {
        $this->buscar = $nombre;
        $this->picked = true;
    }

    public function asignarPrimero()
    {
        $empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")->first();
        if($empresas)
        {
            $this->buscar = $empresas->nombre;
        }
        else
        {
            $this->buscar = "...";
        }
        $this->picked = true;
    }

    public function render()
    {
        return view('livewire.index.busqueda');
    }
}
