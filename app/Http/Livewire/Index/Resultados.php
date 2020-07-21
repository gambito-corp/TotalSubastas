<?php

namespace App\Http\Livewire\Index;

use App\Lot;
use App\Company;
use App\Producto;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Resultados extends Component
{
    public $usuarios;
    public $resultado;
    public $buscar;
    public $empresas;
    public $picked;

    protected $listeners = ['buscarEmpresas', 'selecionEmpresa', 'Precio'];
    /**
     * @var Lot[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $lotes;
    /**
     * @var \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|mixed
     */
    public $productos;
    /**
     * @var mixed
     */
    public $vehiculos;
    /**
     * @var mixed
     */
    public $precioMin;
    /**
     * @var mixed
     */
    public $precioMax;
    /**
     * @var bool|mixed
     */
    public $mount;
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


    public function mount($empresas)
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->picked = true;
        $this->empresas = $empresas;
        $this->mount = 1;
        $this->precioMin = 0;
        $this->precioMax = 1000000;
    }

    public function buscarEmpresas()
    {
        if(Cache::has('buscar')) {
            $this->buscar = Cache::get('buscar');
        }
        if(Cache::has('Min')) {
            $this->precioMin = Cache::get('Min');
        }
        if(Cache::has('Max')) {
            $this->precioMax = Cache::get('Max');
        }
        if(Cache::has('ciudad')) {
            $this->ciudad = Cache::get('ciudad');
        }
        if(Cache::has('tipoV')) {
            $this->tipoV = Cache::get('tipoV');
        }
        if(Cache::has('tipoR')) {
            $this->tipoR = Cache::get('tipoR');
        }
//        dd( 'Buscar = '.$this->buscar,'PrecioMinimo = '.$this->precioMin,'PrecioMaximo = '.$this->precioMax,'ciudad = '.$this->ciudad  ,'Tipo de Vehiculo = '.$this->tipoV  ,'tipo de Reserva = '.$this->tipoR  );//        dd($this->ciudad, 'resultados para ciudad', Cache::get('ciudad'));
        $this->picked = false;

//        $this->empresas = Company::with(['Productos' => function ($query){
//            $query->when(!empty($this->ciudad), function ($query){
//                $query->where("ciudad", $this->ciudad);
//            })
//                ->when(!empty($this->tipoV), function ($query){
//                    $query->where('tipo_vehiculo', $this->tipoV);
//                })
//                ->when(!empty($this->tipoR),function ($query){
//                    $query->where('tipo_reserva', $this->tipoR);
//                })
//                ->whereBetween("precio", [$this->precioMin, $this->precioMax])
//                ->with('Lote');
//        }])
//            ->when(!empty($this->buscar), function ($query){
//                $query->where('nombre', 'like', "%".trim($this->buscar) . "%")
//                    ->orWhere('razon_social', 'like', "%".trim($this->buscar) . "%");
//            })
//            ->with('Lotes')
//            ->has('Productos')
//            ->get();
///////////////////////////////////////////////////////////

        $productosClosure = function ($query)
        {
            $query->when(!empty($this->ciudad), function ($query)
            {
                $query->where("ciudad", $this->ciudad);
            })
                ->when(!empty($this->tipoV), function ($query)
                {
                    $query->where('tipo_vehiculo', $this->tipoV);
                })
                ->when(!empty($this->tipoR),function ($query)
                {
                    $query->where('tipo_reserva', $this->tipoR);
                })
                ->whereBetween("precio", [intval($this->precioMin), intval($this->precioMax)])
                ->with('Lote');
        };

        $lotesClosure = function ($query) use ($productosClosure)
        {
            $query->whereHas('Productos', $productosClosure)->with([
                'Productos' => $productosClosure
            ]);
        };

        $this->empresas = Company::whereHas('Productos', $productosClosure)
            ->with(['Productos' => $productosClosure])
            ->when(!empty($this->buscar), function ($query)
            {
                $query->where('nombre', 'like', "%".trim($this->buscar) . "%")
                    ->orWhere('razon_social', 'like', "%".trim($this->buscar) . "%");
            })
            ->whereHas('Lotes', $lotesClosure)->with(['Lotes' => $lotesClosure])
            ->get();


        //////////////////////////////////////////////////
//        dd($this->empresas);
//        $array[] = [];
//        $i = 0;
//        foreach ($this->empresas as $key => $empresa){
//            if(count($empresa->Productos == 0)){
//                dump('holi');
//            }
//            dump($empresa);
//        }
//        dd($this->empresas);
//        foreach ($this->empresas as $key1 => $empresa){
//            $array[$key1]['id'] = $empresa['id'];
//            $array[$key1]['empresa'] = $empresa['nombre'];
//            $array[$key1]['razon_social'] = $empresa['razon_social'];
//            dump('antes del for', $array);
//                foreach ($empresa as $key2 => $lote){
//                    $array['lotes'] = [
//                        $array['nombre']        => $lote['nombre'],
//                        $array['subasta_at']    => $lote['subasta_at']
//                    ];
//                    dd($array);
//
//                }
//
//            dump('despues del for', $array);
////                foreach ($empresa['productos'] as $key3 => $producto){
////                   'productos'     => [
////                        'id'            => $empresa['productos']['id'],
////                        'ciudad'        => $empresa['productos']['ciudad'],
////                        'tipo_vehiculo' => $empresa['productos']['tipo_vehiculo'],
////                        'tipo_subasta'  => $empresa['productos']['tipo_subasta'],
////                        'tipo_reserva'  => $empresa['productos']['tipo_reserva'],
////                        'nombreVehiculo'=> $empresa['productos']['tipo_subasta'],
////                        'imagen'        => $empresa['productos']['imagen'],
////                        'precio'        => $empresa['productos']['precio'],
////                    ],
////                }
////            dump('resultados = ', $empresa['lotes'], $i);
////            dump('resultados = ', $array);
//        }

//        die();





    }

    public function selecionEmpresa($buscar)
    {
        $this->buscar = $buscar;
        $this->picked = false;
        $this->empresas = Company::where("nombre", "like", "%".trim($this->buscar) . "%")
            ->get();
    }

//    public function Precio($min = 0, $max = 0)
//    {
//        $this->precioMin = intval($min);
//        $this->precioMax = intval($max);
//
//        if ($this->precioMax == 0){
//            $this->precioMax = 1000000;
//        }elseif ($this->precioMin > $this->precioMax){
//            $this->precioMax = $this->precioMin+1;
//        }elseif($this->precioMin = 0) {
//            $this->precioMin = 1;
//        }
//        $this->empresas = Company::all();
//    }


    public function render()
    {
        return view('livewire.index.resultados');
    }
}
