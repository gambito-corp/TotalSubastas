<?php

namespace App\Http\Controllers;

use App\Company;
use App\Helpers\Gambito;
use App\Slide;
use App\User;
use Illuminate\Http\Request;
use App\Mail\contacto;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'contacto', 'sendmail']);
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
        $relacion = Company::all();
        dd($relacion->load('Lotes', 'Productos')->first());
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
