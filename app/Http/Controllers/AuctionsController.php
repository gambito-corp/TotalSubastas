<?php

namespace App\Http\Controllers;

use App\ActiveAuc;
use App\Auction;
use App\Balance;
use App\Company;
use App\Events\SubastaEvent;
use App\Garantia;
use App\Helpers\Gambito;
use App\Lot;
use App\Message;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuctionsController extends Controller
{
    public $Gambito;

    public function __construct()
    {
        $this->Gambito = new Gambito();
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return view('auction.index');
    }

    public function show()
    {
        $producto = Gambito::obtenerProducto()->load('Vehiculo');
        $referidos = Producto::where('lote_id', $producto->lote_id)
            ->where('finalized_at', '>', now())
            ->where('id', '!=', $producto->id)
            ->get();
        $empresa = Company::find($producto->empresa_id)->pluck('nombre')->first();
        $fecha = Lot::find($producto->lote_id)->pluck('subasta_at')->first()->format('M-d g:i A');
        return view('auction.show', compact('producto', 'referidos', 'empresa', 'fecha'));
    }

    public function live()
    {
        $producto = Gambito::obtenerProducto();
        Gambito::checkInicioSubasta($producto);
        Gambito::checkBalance();
        $return  = Gambito::descuentoGarantia();
        if($return == false){
            return redirect()->route('noBalance');
        }

        $activo = ActiveAuc::where('user_id', Auth::id())->where('producto_id', $producto->id)->first();
        if(!$activo)
        {

            ActiveAuc::create([
                'producto_id' => $producto->id,
                'user_id' => Auth::id(),
            ]);
        }
        return view('auction.live');
    }

    public function pujaRecibida(Request $request, $id)
    {
        $producto = Producto::where('id', $id)->first();
//        $estado = 'ganador';
        broadcast(new SubastaEvent($producto, Auth::user(), 'Hola Mundo'));
        return response()->json('enviado');
    }

    public function livEnd ($id)
    {
        $i = 0;
        $producto = Producto::whereId($id)->first();
        $activo = ActiveAuc::where('user_id', Auth::id())->where('producto_id', $id)->first();
        //obtener lista de usuarios activos
        $devolver = false;
        if($activo) {
            $pujo = Message::where('user_id', $activo->user_id)->whereBetween('created_at', [$producto->started_at->sub(15, 'Minutes'), $producto->finalized_at])->first();
            // devolver o retener garantia en cuestion de las acciones tomadas por el usuario
            Garantia::where('user_id', Auth::id())->where('producto_id', $producto->id)->delete();
            $balance = Balance::where('user_id', Auth::id())->first();
            $balance->monto += $producto->garantia;
            $balance->update();
        }
        // nombrar del 1ª al 4ª puesto
        $ganadores = Message::where('producto_id', $producto->id)
            ->orderBy('message', 'desc')
            ->get()
            ->groupBy('user_id');
        foreach($ganadores as $key => $win){
            $llave[$i] = $key;
            $i++;
        }
        $auction = Auction::where('producto_id', $producto->id)->first();

        if(!$auction){
            Auction::create([
                'producto_id' => $producto->id
            ]);
            $auction = Auction::where('producto_id', $producto->id)->first();
        }

        if(isset($llave[0])){
            $auction->ganador_id = $llave[0];
        }
        if(isset($llave[1])){
            $auction->segundo_id = $llave[1];
        }
        if(isset($llave[2])){
            $auction->tercero_id = $llave[2];
        }
        if(isset($llave[3])){
            $auction->cuarto_id = $llave[3];
        }

        $auction->update();

        if ($auction->ganador_id == Auth::id()){
            return redirect()->route('index')->with([
                'message' => 'Felicidades quedaste en primer puesto en la subasta',
                'alerta' => 'success'
            ]);
        }elseif($auction->segundo_id == Auth::id()) {
            return redirect()->route('index')->with([
                'message' => 'Felicidades quedaste en segundo puesto en la subasta, en caso el primer puesto no cumpla su trato el vehiculo te sera otorgado',
                'alerta' => 'success'
            ]);
        }elseif($auction->tercero_id == Auth::id()) {
            return redirect()->route('index')->with([
                'message' => 'Felicidades quedaste en tercer puesto en la subasta, en caso el segundo puesto no cumpla su trato el vehiculo te sera otorgado',
                'alerta' => 'success'
            ]);
        }elseif($auction->cuarto_id == Auth::id()) {
            return redirect()->route('index')->with([
                'message' => 'Felicidades quedaste en cuarto puesto en la subasta, en caso el tercer puesto no cumpla su trato el vehiculo te sera otorgado',
                'alerta' => 'success'
            ]);
        }else{
            return redirect()->route('index')->with([
                'message' => 'estimado lamentablemente no quedaste en un puesto del ranking, no obstante singue cazando ofertas, tu garantia fue liberada',
                'alerta' => 'danger'
            ]);
        }
    }

    public function noBalance()
    {
        return redirect('/')->with([
            'message' => 'estimado lamentablemente no Dispones de suficiente dinero para cubrir la garantia',
            'alerta' => 'danger'
        ]);
    }


}
