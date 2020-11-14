<?php

namespace App\Http\Livewire\Subastas\Show;

use App\Helpers\Gambito;
use App\Like;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $producto;
    public $vehiculo;
    public $detalle;
    public $estado;
    public $hola;
    /**
     * @var mixed
     */
    public $like;

    public function mount()
    {
        $id = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Gambito::obtenerProducto($id)->load('Imagenes', 'Vehiculo', 'Empresa');
        $this->vehiculo = Gambito::obtenerVehiculo();
//        dd($this->producto);
        $user = Gambito::checkUser();
        $this->estado = Gambito::checkEstado($this->producto, $user->id);
        $this->like = Like::all();
        $this->hola = 'hola0';

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
        return view('livewire.subastas.show.index');
    }
}
