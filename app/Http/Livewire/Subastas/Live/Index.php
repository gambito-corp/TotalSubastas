<?php

namespace App\Http\Livewire\Subastas\Live;

use App\Helpers\Gambito;
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
    public $resultado;
    public $pujar;

    Public $Estado;
    public $ranking;
    public $timer;
    public $finaliza;

    protected $listeners = ['refresh'];

    public function mount()
    {
//        dd('mount de live', request()->route()->parameter('id'));
        $this->producto = Producto::find(Gambito::hash(request()->route()->parameter('id'), true))
            ->with(['Mensaje'=>function($query){$query;}])
            ->first();
        $this->vehiculo = Vehicle::where('producto_id', Gambito::hash(request()->route()->parameter('id'), true))->first();
        //Consulta para los mensajes
        $this->mensajes = Message::where('producto_id', Gambito::hash(request()->route()->parameter('id'), true))->get();
        //Consulta para el array
        $this->resultado = Message::with('Usuario')
            ->where('producto_id', Gambito::hash(request()->route()->parameter('id'), true))
            ->orderBy('user_id')
            ->get()
            ->groupBy('user_id');

        $this->pujar = $this->producto->precio + $this->producto->puja;
        $this->ranking = [];
        foreach($this->resultado as $key => $value) {
            $this->ranking[$key]['name'] = $this->resultado[$key]->first()->Usuario->name;
            $this->ranking[$key]['total'] = $this->resultado[$key]->count();
        }
//        foreach ($this->ranking as $value){
//            dump($value['name']);
//            dump($value['total']);
//        }
//        die();

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
        $this->resultado = $this->finaliza - $this->timer;
        $this->resultado = date('H:i:s', $this->resultado);
    }



    public function estado()
    {
        if($this->producto->finalized_at <= now()){
            $this->Estado[0] = 'Finalizada';
        }elseif($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'puja';
        }else{
            $this->Estado[0] = 'puja';
        }
    }

    public function Pujar()
    {
        $this->producto->precio = $this->producto->puja + $this->producto->precio;
        $this->producto->user_id = Auth::id();
        $this->producto->finalized_at = now()->addSeconds(120);
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
        if($this->producto->user_id == Auth::id()){
            $this->Estado[0] = 'puja';
        }else{
            $this->Estado[0] = 'puja';
        }
        $this->estado();
    }

    public function render()
    {
//        dd('entra a render');
        return view('livewire.subastas.live.index');
    }
}
