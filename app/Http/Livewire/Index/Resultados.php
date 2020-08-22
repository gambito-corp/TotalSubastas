<?php

namespace App\Http\Livewire\Index;

use App\Company;
use App\Like;
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
                ->where('finalized_at', '<', now())
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
            $this->empresas = Company::with('Lotes', 'Productos')->get();
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
