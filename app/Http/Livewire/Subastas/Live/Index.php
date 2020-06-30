<?php

namespace App\Http\Livewire\Subastas\Live;

use App\Message;
use App\Producto;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $data;
    public $Estado;
    public $pujar;
    public $marca;
    public $modelo;
    public $nombre;
    public $year;
    public $placa;
    public $garantia;
    public $ganador;
    public $comision;
    public $empresa;
    public $fechaHumana;
    public $precio;

    public $mensajes = [];

    protected $listeners = ['refresh'];

    public function mount($data)
    {
        $this->data = $data;
        $this->marca = $data['vehiculo']->Marca->nombre;
        $this->modelo = $data['vehiculo']->Modelo->nombre;
        $this->nombre = $data['vehiculo']->nombre;
        $this->year = $data['vehiculo']->year;
        $this->placa = $data['vehiculo']->placa;
        $this->garantia = $data['producto']->garantia;
        $this->ganador = $data['producto']->Usuarios->name;
        $this->comision = $data['producto']->comision;
        $this->empresa = $data['producto']->Lotes->Empresas->razon_social;
        $this->fechaHumana = $data['producto']->started_at->diffForHumans();
        $this->precio = $data['producto']->precio;
        $this->pujar = $this->data['producto']->precio + $this->data['producto']->puja;
        if($this->data['producto']->user_id != Auth::id()){
            $this->Estado[0] = 'ganador';
        }else{
            $this->Estado[0] = 'puja';
        }
        $this->mensajes[] = $data['mensajes'];
    }

    public function hydrate()
    {

    }

    public function estado()
    {
        if($this->data['producto']['user_id'] == Auth::id()){
            $this->Estado[0] = 'puja';
        }else{
            $this->Estado[0] = 'puja';
        }

//        dd($this->data['mensajes']);
    }

    public function Pujar()
    {
//        dd($this->data['producto']);
        $producto = Producto::where('id', $this->data['producto']['id'])->first();
        $producto->precio += $producto->puja;
        $producto->user_id = Auth::id();
        $producto->update();

        Message::create([
            'producto_id' => $producto->id,
            'user_id' => Auth::user()->id,
            'message' => $producto->precio
        ]);
        $this->hydrate();
//        $this->emitSelf('refresh');

    }

    public function refresh()
    {
//        $this->emit('refreshChildren');
    }

    public function render()
    {
        return view('livewire.subastas.live.index');
    }
}
