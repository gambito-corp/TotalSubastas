<?php

namespace App\Http\Livewire\Index;

use App\Company;
use App\Like;
use App\Producto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Resultados extends Component
{
    public $usuarios;
    public $resultado;
    public $buscar;
    public $empresas;
    public $picked;
    public $precioMin;
    public $precioMax;
    public $ciudad;
    public $tipoV;
    public $tipoR;
    public $like;
    public $cuenta;

    protected $listeners = ['buscarEmpresas'];


    public function mount($empresas)
    {
        $this->usuarios = [];
        $this->resultado = [];
        $this->picked = true;
        $this->empresas = $empresas;
        $this->precioMin = 0;
        $this->precioMax = 1000000;
        $this->like = Like::all();
        $this->cuenta = count(Producto::where('finalized_at','>',now())->get());
    }

    public function buscarEmpresas()
    {
        if(Cache::has('buscar')){$this->buscar = Cache::get('buscar');}
        if(Cache::has('Min')){$this->precioMin = Cache::get('Min');}
        if(Cache::has('Max')){$this->precioMax = Cache::get('Max');}
        if(Cache::has('ciudad')){$this->ciudad = Cache::get('ciudad');}
        if(Cache::has('tipoV')){$this->tipoV = Cache::get('tipoV');}
        if(Cache::has('tipoR')){$this->tipoR = Cache::get('tipoR');}
        $this->picked = false;

        $productosClosure = function ($query)
        {
//            DB::select('SELECT * FROM `productos WHERE `productos`.`empresa_id` = `companies`.`id`' =  and `tipo_vehiculo` = Vehiculo Ligero and `precio` between 0 and 1000000 and `finalized_at` < 2020-09-05 00:44:37 and `productos`.`deleted_at` is null);
            $query->when(!empty($this->ciudad), function ($query)
            {
                $query->where("ciudad", $this->ciudad);
            })->when(!empty($this->tipoV), function ($query)
            {
                $query->where('tipo_vehiculo', $this->tipoV);
            })->when(!empty($this->tipoR),function ($query)
            {
                $query->where('tipo_reserva', $this->tipoR);
            })->whereBetween("precio", [intval($this->precioMin), intval($this->precioMax)])
                ->where('finalized_at', '>', now())
                ->with('Lote');
        };

        $lotesClosure = function ($query) use ($productosClosure){
            $query->whereHas('Productos', $productosClosure)->with([
                'Productos' => $productosClosure
            ]);
        };

        $this->empresas = Company::with(['Productos' => $productosClosure])
            ->whereHas('Productos', $productosClosure)
            ->when(!empty($this->buscar), function ($query)
            {
                $query->where('nombre', 'like', "%".trim($this->buscar) . "%")
                    ->orWhere('razon_social', 'like', "%".trim($this->buscar) . "%");
            })
            ->with(['Lotes' => $lotesClosure])
            ->whereHas('Lotes', $lotesClosure)
            ->get();

        $this->cuenta = 0;
        foreach ($this->empresas as $empresa){
            $this->cuenta += count($empresa->Productos);
        }
        if ($this->ciudad == '*'){
            if(Cache::has('tipoV')){
                Cache::forget('tipoV');
            }
            if(Cache::has('tipoR')){
                Cache::forget('tipoR');
            }
            if(Cache::has('Min')){
                Cache::forget('Min');
            }
            if(Cache::has('Max')){
                Cache::forget('Max');
            }
            if(Cache::has('buscar')){
                Cache::forget('buscar');
            }
            if(Cache::has('ciudad')){
                Cache::forget('ciudad');
            }
//            $this->empresas = Company::with('Lotes', 'Productos')->get();
        }
    }

    public function addLike($id)
    {
        $like = $this->like->where('producto_id', $id)->where('user_id', Auth::id())->first();
        if ($like){
            $like->delete();
        }elseif (Auth::id() != null){
            Like::create([
                'producto_id' => $id,
                'user_id' => Auth::id()
            ]);
        }
        $this->like = Like::all();
    }

    public function render()
    {
        return view('livewire.index.resultados');
    }
}
