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
use App\Ranking;
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

    public function campeon()
    {
        $message = 'Felicidades quedaste en primer puesto en la subasta';
        $alerta = 'success';
        $slide = Slide::where('activo', 1)->get();
        return view('home.index', compact('message', 'alerta', 'slide'));
    }
    public function segundo()
    {
        $message = 'Felicidades quedaste en segundo puesto en la subasta, en caso el primer puesto no cumpla su trato el vehiculo te sera otorgado';
        $alerta = 'success';
        $slide = Slide::where('activo', 1)->get();
        return view('home.index', compact('message', 'alerta', 'slide'));
    }
    public function tercero()
    {
        $message = 'Felicidades quedaste en tercer puesto en la subasta, en caso el segundo puesto no cumpla su trato el vehiculo te sera otorgado';
        $alerta = 'success';
        $slide = Slide::where('activo', 1)->get();
        return view('home.index', compact('message', 'alerta', 'slide'));
    }
    public function cuarto()
    {
        $message = 'Felicidades quedaste en cuarto puesto en la subasta, en caso el tercer puesto no cumpla su trato el vehiculo te sera otorgado';
        $alerta = 'success';
        $slide = Slide::where('activo', 1)->get();
        return view('home.index', compact('message', 'alerta', 'slide'));
    }
    public function quinto()
    {
        $message = 'estimado lamentablemente no quedaste en un puesto del ranking, no obstante singue cazando ofertas, tu garantia fue liberada';
        $alerta = 'danger';
        $slide = Slide::where('activo', 1)->get();
        return view('home.index', compact('message', 'alerta', 'slide'));
    }

    public function index()
    {
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
