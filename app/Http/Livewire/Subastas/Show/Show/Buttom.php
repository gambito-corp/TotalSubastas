<?php

namespace App\Http\Livewire\Subastas\Show\Show;

use App\Participacion;
use App\Person;
use App\Producto;
use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Helpers\Gambito;

class Buttom extends Component
{
    public $producto;
    public $estado;
    public $tyc;
    protected $listeners = ['refreshChildren'];

    public function mount($producto)
    {
        $this->producto = $producto;
    }

    public function updatedTyc()
    {
        $this->validate([
            'tyc' => 'required',
        ]);
        Cache::put('tyc', $this->tyc, 120);
        $this->tyc = Cache::get('tyc');
    }


    public function estado()
    {
        $this->tyc = $this->tyc;
        $user = Gambito::checkUser();
        $this->estado = Gambito::checkEstado($this->producto, $user->id);
    }

    public function pujar($tyc)
    {
        $this->validate([
            'tyc' => 'required',
        ]);
        $participacion = Participacion::where('user_id', Auth::id())
            ->where('producto_id', $this->producto->id)
            ->pluck('participacion')
            ->first();
//        dd($participacion);
        DB::transaction(function()use($participacion){
            DB::table('productos')
                ->where('id', $this->producto->id)
                ->update([
                    'precio' => $this->producto->puja+$this->producto->precio,
                    'user_id' => Auth::id(),
                    'updated_at' => now()
                ]);
            DB::table('participacions')
                ->updateOrInsert(
                    [
                        'user_id' => Auth::id(),
                        'producto_id' => $this->producto->id,
                    ],
                    [
                        'participacion' => $participacion+1,
                        'updated_at' => now()
                    ]
                );
        });
        $participacion = Participacion::where('user_id', Auth::id())
            ->where('producto_id', $this->producto->id)
            ->first();
        $participacion->created_at == null?$participacion->created_at = now():'';
        $participacion->update();
        $this->estado();
        $this->emitUp('refresh');
    }

    public function render()
    {
        return view('livewire.subastas.show.show.buttom');
    }
}
