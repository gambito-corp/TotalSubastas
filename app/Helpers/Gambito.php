<?php


namespace App\Helpers;


use App\Balance;
use App\Garantia;
use App\Message;
use App\Producto;
use App\User;
use App\VehicleDetail;
use Hashids\Hashids;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Gambito
{
    public $id;
    public $check;

    //METODOS DE ENCRIPTACION
    public static function hash($id, $decode = null)
    {
        $hashids = new Hashids();
        return is_null($decode)
            ?  $hashids->encode($id, 0,1,2,3,4,5,6,5,4,3,2,1,0 ,$id)
            :  $hashids->decode($id)[0];
    }

    // METODOS DE SELECT
    public static function obtenerProducto($id = null)
    {
        return Producto::where('id', is_null($id) ? self::hash(request()->route()->parameter('id'),true): $id)->with('Usuario')->first();
    }

    public static function checkBalance()
    {
        return Balance::where('user_id', Auth::user()->id)->where('aprobado', true)->sum('monto');
    }

    public static function obtenerMensajes($id = null, $ranking = false )
    {
        return $ranking
            ? self::generarRanking($id)
            : Message::with('Usuario')->where('producto_id', is_null($id)?self::hash(request()->route()->parameter('id'), true):$id)->get();
    }

    public static function obtenerVehiculo($id = null)
    {
        return VehicleDetail::where('producto_id', is_null($id)?self::hash(request()->route()->parameter('id'), true):$id)->first();
    }

    //METODOS DE CREATE/UPDATE
    protected static function hacerDescuento($descuento, $noBalance)
    {
        if($noBalance){
            DB::transaction(function()use($descuento){
                Garantia::create([
                    'producto_id' => self::hash(request()->route()->parameter('id'), true),
                    'user_id' => Auth::id(),
                    'monto' => self::obtenerProducto()->garantia,
                ]);
                Balance::where('user_id', Auth::id())->update([
                    'monto' => $descuento
                ]);
            });
        }
        return true;
    }

    //METODOS DE COMPROBACION
    public static function checkUser()
    {
        $user = new User();
        return !is_null(Auth::user())
            ? Auth::user()
            : $user;
    }

    public static function checkEstado(Producto $producto, $id, $live = false, $set = false)
    {
        if($producto->started_at->sub(15, 'Minutes')<=now() && $producto->finalized_at >= now() && $live == false){
            $estado = 'online';
        }elseif($producto->user_id == $id && $producto->finalized_at >= now()){
            $estado = 'ganador'; //Cambiar a ganador
        }elseif($producto->finalized_at->subSecond()->toTimeString() <= now()->toTimeString() && $live == true){
            $estado = 'STOP';
        }elseif($producto->started_at->toTimeString() >= now()->toTimeString() && $producto->finalized_at->toTimeString() >= now()->toTimeString()  && $live == true){
            $estado = 'esperen';
        }elseif($producto->user_id != $id && $producto->finalized_at >= now()){
            $estado = 'puja';
        }elseif(now()->subSecond()->toTimeString() <= $producto->finalized_at->toTimeString()   || $set == true){
            $estado = 'Finalizada';
        }else{
            $estado = 'hola';
        }
        return $estado;
    }

    public static function checkInicioSubasta(Producto $producto)
    {
        if (now() < $producto->started_at) {
            return redirect()->route('index')->with('flash', 'La Subasta Todavia no empieza');
        } elseif (now() > $producto->finalized_at) {
            session()->flash('message', 'La subasta finalizo');
            return redirect()->route('index');
        }
        return true;
    }

    // ACCIONES COMPLEJAS Y REDIRECCIONES
    public static function descuentoGarantia()
    {
        $return = true;
        $descuento = self::checkBalance() - self::obtenerProducto()->garantia;
        if (is_numeric($descuento) && ($descuento<0)) {
            $return = false;
        }
        //comprobar que el descuento no se hizo antes
        $check = Garantia::where('producto_id', self::hash(request()->route()->parameter('id'), true))
            ->where('user_id', Auth::id())
            ->first();
        if (is_null($check)) {
            //descontar la garantia al balance solo si no se hizo para esta subasta
            self::hacerDescuento($descuento, $return);
        }
        return $return;
    }

    public static function generarRanking($id = false)
    {
        $resultado = Message::where('producto_id', is_null($id)?self::hash(request()->route()->parameter('id'), true):$id)
            ->with('Usuario')
            ->orderBy('message')
            ->get()
            ->groupBy('user_id')
            ->toArray();

        foreach ($resultado as $key => $value){
            $ranking[$key]['total'] = count($resultado[$key]);
            $ranking[$key]['nombre'] = $resultado[$key][0]['usuario']['name'];
            $ranking[$key]['puja'] = end($resultado[$key])['message'];
        }

        return $resultado;
    }

    public static function cuentaRegresiva($id)
    {
        $finaliza = mktime(
            self::obtenerProducto($id)->finalized_at->hour,
            self::obtenerProducto($id)->finalized_at->minute,
            self::obtenerProducto($id)->finalized_at->second
        );
        $countDown = $finaliza - time();

        return date('H:i:s', $countDown);
    }

    public static function Pujar($id, $live = false)
    {
        $producto = self::obtenerProducto($id);
        if($live && $producto->finalized_at <= now()){
            if($live && $producto->finalized_at == now()->subSecond())
            {
                self::checkEstado($producto, Auth::id(), true, true);
            }
            $producto->finalized_at = now()->addSeconds(8);
        }
        $producto->update();
        if($live){
            $mensaje = Message::create([
                'producto_id' => $producto->id,
                'user_id' => Auth::id(),
                'message' => $producto->precio
            ]);
        }
        return $live
            ? [$producto, $mensaje]
            : $producto;
    }
}
