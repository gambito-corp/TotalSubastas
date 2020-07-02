<?php

namespace App\Http\Livewire\Subastas\Show\Show;

use App\Producto;
use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Helpers\Gambito;
class Buttom extends Component
{

    public $Producto;
    public $Estado;
    public $Gambito;
    protected $listeners = ['refreshChildren'];

    public $puja = 100;

    public function mount(Producto $Producto,  $Estado)
    {
        $this->Producto = $Producto;
        $this->Estado = $Estado;
    }

    public function estado()
    {
        //comprobar si existe el usuario actual
        $user = Gambito::checkUser();
        //TODO: Pasar a metodo en gambito checkEstado()
        if($this->Producto->started_at->sub(15, 'Minutes')<=now() && $this->Producto->finalized_at >= now()){
            $this->Estado[0] = 'online';
        }elseif($this->Producto->user_id == $user->id && $this->Producto->finalized_at >= now()){
            $this->Estado[0] = 'ganador';
        }elseif($this->Producto->user_id != $user->id && $this->Producto->finalized_at >= now()){
            $this->Estado[0] = 'puja';
        }elseif($this->Producto->finalized_at <= now()){
            $this->Estado[0] = 'Finalizada';
        }else{
            $this->Estado[0] = 'puja';
        }
    }

    public function pujar()
    {
        $this->Producto = Producto::where('id', $this->Producto->id)->first();
        $this->Producto->precio += $this->Producto->puja;
        $this->Producto->user_id = Auth::user()->id;
        $this->Producto->update();
        $this->estado();
        $this->emitUp('refresh');
    }

    public function render()
    {
        return view('livewire.subastas.show.show.buttom');
    }
}
