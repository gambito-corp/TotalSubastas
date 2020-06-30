<?php

namespace App\Http\Livewire\Subastas\Live;

use App\Message;
use App\Producto;
use App\Vehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $producto;
    public $vehiculo;
    public $mensajes;
    public $usuario;
    Public $Estado;
    public $pujar;
    public $ranking;

    protected $listeners = ['refresh'];

    public function mount()
    {
        $this->producto = Producto::find(request()->route()->parameter('id'))->first();
        $this->vehiculo = Vehicle::where('producto_id', request()->route()->parameter('id'))->first();
        $this->mensajes = Message::where('producto_id', request()->route()->parameter('id'))->get();
        $this->usuario = Auth::user();
        $this->pujar = $this->producto->precio + $this->producto->puja;
        $this->ranking[] = ['cantidad' => 0, 'usuario' => 0];
        if($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'ganador';
        }else{
            $this->Estado[0] = 'puja';
        }
    }


    public function estado()
    {
        if($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'ganador';
        }else{
            $this->Estado[0] = 'puja';
        }
    }

    public function Pujar()
    {
//        dd($this->producto);
        $this->producto->precio += $this->producto->puja;
        $this->producto->user_id = Auth::id();
        $this->producto->update();

        Message::create([
            'producto_id' => $this->producto->id,
            'user_id' => Auth::user()->id,
            'message' => $this->producto->precio
        ]);

        $this->pujar = $this->producto->precio + $this->producto->puja;


        $this->emitSelf('refresh');

    }


    public function refresh()
    {
        $this->mensajes = Message::where('producto_id', $this->producto->id)->get();

        foreach ($this->mensajes as $key => $mensaje){
            $this->ranking[$key] = [
            'cantidad' => $key,
                'usuario' => $mensaje->user_id
            ];
        }
//        arsort($this->ranking, 1);
//        dump($this->ranking);
//        die();
//        $sorted = $this->mensajes->sortBy('user_id');
//        dd($this->mensajes->user_id);







        if($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'puja';
        }else{
            $this->Estado[0] = 'puja';
        }
        $this->estado();
    }

    public function render()
    {
        return view('livewire.subastas.live.index');
    }
}
