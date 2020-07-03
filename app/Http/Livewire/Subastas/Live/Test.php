<?php

namespace App\Http\Livewire\Subastas\Live;

use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use App\Vehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Test extends Component
{

    public $producto;
    public $vehiculo;
    public $mensajes;
    public $resultado;
    public $pujar;
    public $identificador;
    Public $Estado;
    public $ranking;
    public $timer;
    public $finaliza;

    protected $listeners = ['refresh'];

    public function mount()
    {
        $this->identificador = Gambito::hash(request()->route()->parameter('id'), true);
        $this->producto = Gambito::obtenerProducto();
        $this->vehiculo = Vehicle::where('producto_id', Gambito::hash(request()->route()->parameter('id'), true))->first();
        //Consulta para los mensajes
        $this->mensajes = Message::where('producto_id', Gambito::hash(request()->route()->parameter('id'), true))->get();
        //Consulta para el array
//        $this->resultado = Message::with('Usuario')
//            ->where('producto_id', Gambito::hash(request()->route()->parameter('id'), true))
//            ->orderBy('user_id')
//            ->get()
//            ->groupBy('user_id');
//        $this->resultado = $this->resultado->groupBy('user_id');
        foreach($this->resultado as $key => $value) {
            $this->ranking[$key]['name'] = $this->resultado[$key]->first()->Usuario->name;
            $this->ranking[$key]['total'] = $this->resultado[$key]->count();
        }
//        dd($this->resultado);
        $this->pujar = $this->producto->precio + $this->producto->puja;

        $this->timer = time();

        if($this->producto->finalized_at <= now()){
            $this->Estado[0] = 'Finalizada';
        }elseif($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'puja';
        }else{
            $this->Estado[0] = 'puja';
        }

        $this->finaliza = mktime(
            $this->producto->finalized_at->hour,
            $this->producto->finalized_at->minute,
            $this->producto->finalized_at->second
        );
//        $this->resultado = $this->finaliza - $this->timer;
//        $this->resultado = date('H:i:s', $this->resultado);
    }









    public function estado()
    {
        $this->resultado = $this->resultado->groupBy('user_id');
        foreach($this->resultado as $key => $value) {
            $this->ranking[$key]['name'] = $this->resultado[$key]->first()->Usuario->name;
            $this->ranking[$key]['total'] = $this->resultado[$key]->count();
//            dump($this->ranking, 'iteracion '.$key);
        }
        if($this->producto->finalized_at <= now()){
            $this->Estado[0] = 'Finalizada';
        }elseif($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'puja';
        }else{
            $this->Estado[0] = 'puja';
        }
    }

    public function pujar()
    {
        $this->producto->precio += $this->producto->puja;
        $this->producto->user_id = Auth::user()->id;
        $this->producto->finalized_at = now()->addSeconds(120);
        $this->producto->update();

        Message::create([
            'producto_id' => $this->producto->id,
            'user_id' => Auth::user()->id,
            'message' => $this->producto->precio
        ]);

        $this->emitSelf('refresh');
    }


    public function refresh()
    {
//        dd($this->ranking, 'holi');
        die();
        if($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'puja';
        }else{
            $this->Estado[0] = 'puja';
        }
        $this->estado();
    }




    public function render()
    {
        return view('livewire.subastas.live.test');
    }
}
