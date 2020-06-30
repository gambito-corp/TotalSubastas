<?php

namespace App\Http\Livewire\Auctions\Assets;

use App\Producto;
use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Helpers\Gambito;

class ShowButtom extends Component
{

    public $Producto;
    public $Estado;
    public $Gambito;

    public $puja = 100;

    public function mount(Producto $Producto,  $Estado)
    {
        $this->Producto = $Producto;
        $this->Estado = $Estado;



    }

    public function estado()
    {
        //comprobar si existe el usuario actual

        if(!is_null(Auth::user())){
            $user = Auth::user();
        }else{
            $user = new User();
            $user->id = 0;
        }

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
    }

    public function render()
    {
        return view('livewire.auctions.assets.show-buttom');
    }

}
