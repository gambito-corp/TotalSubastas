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
            :  $hashids->decode($id)[0];
    }

    public static function checkUser()
    {
        $user = new User();
        return !is_null(Auth::user())
            ? Auth::user()
            : $user;
    }

    public static function checkEstado(Producto $producto, $id)
    {
        if($producto->started_at->sub(15, 'Minutes')<=now() && $producto->finalized_at >= now()){
            $estado = 'online';
        }elseif($producto->user_id == $id && $producto->finalized_at >= now()){
            $estado = 'ganador';
        }elseif($producto->user_id != $id && $producto->finalized_at >= now()){
            $estado = 'puja';
        }elseif($producto->finalized_at <= now()){
            $estado = 'Finalizada';
        }else{
            $estado = 'puja';
        }
        return $estado;
    }

    protected static function redireccionTime(Producto $producto)
    {

        if (now() < $producto->started_at) {
            return redirect()->route('index')->with('flash', 'La Subasta Todavia no empieza');
        } elseif (now() > $producto->finalized_at) {
            return redirect()->route('index')->with('flash', 'La Subasta ya finalizo');
        }
        return true;
    }


    public static function checkInicioSubasta()
    {
        $producto = Producto::findOrFail(self::hash(request()->route()->parameter('id'),true));

        return self::redireccionTime($producto)
            ? $producto
            : redirect()->route('index')->with('flash', 'Problemas tecnicos');
    }

    public static function checkBalance()
    {
        return Balance::where('user_id', Auth::user()->id)->firstOrFail();
    }

    public static function descuentoGarantia()
    {
        $descuento = self::checkBalance()->monto - self::checkInicioSubasta()->garantia;

        if ($descuento < 0) {
            return redirect()->route('index')->with('flash', 'No se le puede descuntar ese monto de garantia, no tiene suficientes fondos, porfavor recargue');
        }

        //comprobar que el descuento no se hizo antes
        $check = Garantia::where('producto_id', self::hash(request()->route()->parameter('id'), true))
            ->where('user_id', Auth::id())
            ->first();

        if (is_null($check)) {
            //descontar la garantia al balance solo si no se hizo para esta subasta
            self::hacerDescuento();
        }
        return true;
    }

    protected static function hacerDescuento()
    {
        Garantia::create([
            'producto_id' => self::hash(request()->route()->parameter('id'), true),
            'user_id' => Auth::id(),
            'monto' => self::checkInicioSubasta(self::hash(request()->route()->parameter('id'), true))->garantia,
        ]);
        return true;
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


}
