<?php

namespace App\Http\Controllers;

use App\ActiveAuc;
use App\Auction;
use App\Balance;
use App\Company;
use App\Country;
use App\Garantia;
use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use App\Ranking as Rank;
use App\Slide;
use App\User;
use Illuminate\Http\Request;
use App\Mail\contacto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'contacto', 'sendmail']);
    }

    public function index()
    {
//
//
//
//        $i = 0;
//        $id = 3;
//        $producto = Producto::whereId($id)->firstOrFail();
//        $activo = ActiveAuc::where('user_id', Auth::id())->where('producto_id', $id)->first();
//        //obtener lista de usuarios activos
//        $devolver = false;
//        if($activo) {
//            $pujo = Message::where('user_id', Auth::id())->whereBetween('created_at', [$producto->started_at->sub(15, 'Minutes'), $producto->finalized_at])->first();
//            // devolver o retener garantia en cuestion de las acciones tomadas por el usuario
//            Garantia::where('user_id', Auth::id())->where('producto_id', $producto->id)->delete();
//            $balance = Balance::where('user_id', Auth::id())->first();
//            $balance->monto += $producto->garantia;
//            $balance->update();
//        }
//        // nombrar del 1ª al 4ª puesto
//        $ganadores = Message::where('producto_id', $producto->id)
//            ->orderBy('message', 'desc')//Revisar en caso de queja
//            ->get()
//            ->groupBy('user_id');
//
//        $opcional = Message::with('Usuario')
//            ->where('producto_id', $id)
//            ->orderByDesc('updated_at')
//            ->take(4)
//            ->get();
////            ->toArray();
////        dump($opcional[0]->message.' '.$opcional[0]->user_id);
////        dump($opcional[1]->message.' '.$opcional[1]->user_id);
////        dump($opcional[2]->message.' '.$opcional[2]->user_id);
////        dump($opcional[3]->message.' '.$opcional[3]->user_id);
//
//        foreach($ganadores as $key => $win){
//            $llave[$i] = $key;
//            $i++;
////            dump($llave, $win);
//        }
//        $auction = Auction::where('producto_id', $producto->id)->first();
//        if(!$auction){
//            Auction::create([
//                'producto_id' => $producto->id
//            ]);
//            $auction = Auction::where('producto_id', $producto->id)->first();
//        }
//
//        if(isset($llave[0])){
//            $auction->ganador_id = $llave[0];
//        }
//        if(isset($llave[1])){
//            $auction->segundo_id = $llave[1];
//        }
//        if(isset($llave[2])){
//            $auction->tercero_id = $llave[2];
//        }
//        if(isset($llave[3])){
//            $auction->cuarto_id = $llave[3];
//        }
//
//        $auction->update();
//
//        dd($auction, $ganadores, $opcional);
//
//        if ($auction->ganador_id == Auth::id()){
//            return redirect()->route('index')->with([
//                'message' => 'Felicidades quedaste en primer puesto en la subasta',
//                'alerta' => 'success'
//            ]);
//        }elseif($auction->segundo_id == Auth::id()) {
//            return redirect()->route('index')->with([
//                'message' => 'Felicidades quedaste en segundo puesto en la subasta, en caso el primer puesto no cumpla su trato el vehiculo te sera otorgado',
//                'alerta' => 'success'
//            ]);
//        }elseif($auction->tercero_id == Auth::id()) {
//            return redirect()->route('index')->with([
//                'message' => 'Felicidades quedaste en tercer puesto en la subasta, en caso el segundo puesto no cumpla su trato el vehiculo te sera otorgado',
//                'alerta' => 'success'
//            ]);
//        }elseif($auction->cuarto_id == Auth::id()) {
//            return redirect()->route('index')->with([
//                'message' => 'Felicidades quedaste en cuarto puesto en la subasta, en caso el tercer puesto no cumpla su trato el vehiculo te sera otorgado',
//                'alerta' => 'success'
//            ]);
//        }else{
//            return redirect()->route('index')->with([
//                'message' => 'estimado lamentablemente no quedaste en un puesto del ranking, no obstante singue cazando ofertas, tu garantia fue liberada',
//                'alerta' => 'danger'
//            ]);
//        }
//
//
//
//
//        dd('holi');
        $slide = Slide::where('activo', 1)->get();
        return view('home.index', compact('slide'));
    }
    public function home()
    {
        return view('admin.home');
    }

    public function testAjax(Request $request)
    {
        $id = $request->id;
        return User::where('id','like', '%' .$id . '%')->get()->dd();
    }

    public function test()
    {
        $data = Country::all('id', 'parent_id', 'nombre');
        json_encode($data);
        return response()->json($data, 200);
    }

    public function contacto()
    {
        return view('home.contacto');
    }

    public function sendmail(Request $request)
    {
        $request->validate([
            'nombre'    => 'required|string',
            'asunto'    => 'required|string',
            'correo'    => 'required|email',
            'mensaje'   => 'required'
        ]);
        Mail::to('admin@totalsubastas.com')->send(new contacto($request->input()));
        return redirect()->route('index')->with(['message' => ' Mensaje Enviado Correctamente', 'alerta' => 'success']);
    }


}
