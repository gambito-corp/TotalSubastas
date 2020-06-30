<?php


namespace App\Helpers;


use App\Balance;
use App\Garantia;
use App\Message;
use App\Producto;
use App\User;
use App\Vehicle;
use Hashids\Hashids;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class Gambito
{
    public $id;
    public $check;

    public static function hash($id, $decode = null)
    {
        $hashids = new Hashids();
        return is_null($decode)
            ?  $hashids->encode($id, 0,1,2,3,4,5,6)
            :  $hashids->decode($id);
    }

    public function checkInicioSubasta($id)
    {
        $this->id = $id;
        $producto = Producto::findOrFail($this->id);
        if (now() < $producto->started_at) {
            return redirect()->route('index')->with('flash', 'La Subasta Todavia no empieza');
        } elseif (now() > $producto->finalized_at) {
            return redirect()->route('index')->with('flash', 'La Subasta ya finalizo');
        }
        return $producto;
    }

    public function checkBalance()
    {

        $balance = Balance::where('user_id', Auth::user()->id)->firstOrFail();
        return $balance;
    }

    public function descuentoGarantia()
    {

        $descuento = $this->checkBalance()->monto - $this->checkInicioSubasta($this->id)->garantia;

        if ($descuento <= 0) {
            return redirect()->route('index');
        }

        //comprobar que el descuento no se hizo antes
        $this->check = Garantia::where('producto_id', $this->id)
            ->where('user_id', Auth::id())
            ->first();
        if (is_null($this->check)) {
            //descontar la garantia al balance solo si no se hizo para esta subasta
            $this->hacerDescuento($descuento);
        }


    }

    protected function hacerDescuento($descuento)
    {
        //comprobar que el descuento no se hizo antes
        $this->check = new Garantia();

        //Hacer el descuento
        $this->checkBalance()->update([
            'monto' => $this->checkBalance()->monto - $this->checkInicioSubasta($this->id)->garantia
        ]);

        //guardar el descuento en la tabla especial
        $this->check = Garantia::create([
            'producto_id' => $this->id,
            'user_id' => Auth::id(),
            'monto' => $this->checkInicioSubasta($this->id)->garantia,
        ]);
    }

    protected function mensajes()
    {
        $data = Message::where('producto_id', $this->id)->get();
        return $data;
    }

    protected function vehiculo()
    {
        return Vehicle::where('producto_id', $this->id)->first();
    }

    public function data()
    {
        return $data = [
            'mensajes' => collect($this->mensajes()),
            'producto' => $this->checkInicioSubasta($this->id),
            'usuario' => Auth::user(),
            'vehiculo' => $this->vehiculo(),
            'balance' => $this->checkBalance()
        ];
    }
    public function Pujar()
    {
        dd($this->id);
        $this->checkInicioSubasta($this->id)->precio += $this->checkInicioSubasta($this->id)->puja;
        $this->checkInicioSubasta($this->id)->user_id = Auth::id();
        return $this->Producto->update();
    }

}
