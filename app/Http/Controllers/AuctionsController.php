<?php

namespace App\Http\Controllers;

use App\ActiveAuc;
use App\Auction;
use App\Balance;
use App\Company;
use App\DocumentosVehiculo;
use App\Events\RankingEvent;
use App\Events\SubastaEvent;
use App\Garantia;
use App\Helpers\Gambito;
use App\Lot;
use App\Mail\citas;
use App\Message;
use App\Notifications\RegistroDeParticipante;
use App\Producto;
use App\Person;
use App\Ranking;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $producto = Gambito::obtenerProducto()->load('Vehiculo', 'Empresa');
        $documentos = DocumentosVehiculo::with('Empresa', 'Lote', 'Producto')
            ->where('producto_id', $producto->id)->first();
        $referidos = Producto::where('lote_id', $producto->lote_id)
            ->where('finalized_at', '>', now())
            ->where('id', '!=', $producto->id)
            ->get();
        $empresa = Company::where('id', $producto->empresa_id)->first();
        $empresa = $empresa->nombre;
        $fecha = Lot::find($producto->lote_id)->pluck('subasta_at')->first()->format('M-d g:i A');
        $resultados = Ranking::with('Usuario')->where('producto_id', $producto->id)->orderBy('cantidad', 'desc')->orderByDesc('updated_at')->take(6)->get()->toArray();
        return view('auction.show', compact('producto', 'documentos', 'referidos', 'empresa', 'fecha', 'resultados'));
    }

    public function citas(Request $request, $id)
    {
        $id = Gambito::hash($id, true);
        $producto = Producto::where('id', $id)->first();
        $user = User::where('id', Auth::id())->first();
        Mail::to('admin@totalsubastas.com')->send(new citas($request->input(), $producto, $user,  'admin'));
        Mail::to(Auth::user()->email)->send(new citas($request->input(), $producto, $user, 'user'));
        return redirect()->route('index')->with(['message' => ' Mensaje Enviado Correctamente', 'alerta' => 'success']);
    }

//$garantia = Garantia::where('producto_id', $this->producto->id)->where('user_id', Auth::id())->first();
//if($garantia != null){
//return redirect()->route('auctionLiveDetail', ['id' => Gambito::hash($this->producto->id)]);
//}
//if($garantia != null){


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
            //TODO: Checar porque es 0
            Garantia::where('user_id', Auth::id())->where('producto_id', $producto->id)->delete();
            $balance = Balance::where('user_id', Auth::id())->first();
            $balance->monto += $producto->garantia;
            $balance->update();
        }
        // nombrar del 1ª al 4ª puesto
        $auction = Auction::where('producto_id', $producto->id)->first();

        if(!$auction){
            Auction::create([
                'producto_id' => $producto->id
            ]);
            $auction = Auction::where('producto_id', $producto->id)->first();
        }
        $resultados = Ranking::where('producto_id', $producto->id)->orderBy('monto', 'desc')->get()->take(4);

        if(isset($resultados[0])){
            $auction->ganador_id = $resultados[0]->user_id;
        }

        if(isset($resultados[1])){
                $auction->segundo_id = $resultados[1]->user_id;
            }

            if(isset($resultados[2])){
                $auction->tercero_id = $resultados[2]->user_id;
        }

        if(isset($resultados[3])){
            $auction->cuarto_id = $resultados[3]->user_id;
        }

        $auction->update();

        if ($auction->ganador_id == Auth::id()){
            $ruta = 'campeon';
        }
        if($auction->segundo_id == Auth::id()) {
            $ruta = 'segundo';
        }
        if($auction->tercero_id == Auth::id()) {
            $ruta = 'tercero';
        }
        if($auction->cuarto_id == Auth::id()) {
            $ruta = 'cuarto';
        }
        if(($auction->ganador_id||$auction->segundo_id||$auction->tercero_id||$auction->cuarto_id) != Auth::id()){
            $ruta = 'quinto';
        }
        return redirect()->route($ruta);
    }

    public function noBalance()
    {
        return redirect('/')->with([
            'message' => 'estimado lamentablemente no Dispones de suficiente dinero para cubrir la garantia',
            'alerta' => 'danger'
        ]);
    }
}
