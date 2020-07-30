<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Events\subastaEvent;
use App\Message;
use App\Producto;
use App\User;
use App\VehicleDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function test ()
    {
        $vehiculo = VehicleDetail::where('id', 1)->first();
        $producto = Producto::where('id', 1)->first();
        $estado = 'puja';
        $mensajes = Message::where('producto_id', 1)->get();
        $resultados = Message::where('producto_id', 1)->get();
        $rankings = Message::where('producto_id', 1)->get();
        $contador = 0;
        return view('test.PujaTest', compact('vehiculo', 'producto', 'estado', 'mensajes', 'resultados', 'rankings', 'contador'));
    }

    public function TestEnviado(Request $request, $id)
    {
        $producto = Producto::where('id', $id)->first();

        $estado = 'ganador';


        broadcast(new SubastaEvent($producto, Auth::user(), 'Hola Mundo'));

        return response()->json('enviado');
    }
}
