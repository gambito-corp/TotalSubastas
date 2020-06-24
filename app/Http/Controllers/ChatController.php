<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Events\MessageSent;
use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public $puja;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->puja = 100;
        $this->middleware('auth');
    }

    public function ShowChat($id)
    {
        $user_id = \Auth::user()->id;
        // Poder acceder solo durante el tiempo que esta permitido en la BD de lo contrario no poder entrar
        $producto = Producto::where('id', $id)->first();
        if(now() < $producto->started_at)
        {
            return redirect()->route('index')->with('flash', 'La Subasta Todavia no empieza');
        }elseif(now() > $producto->finalized_at)
        {
            return redirect()->route('index')->with('flash', 'La Subasta ya finalizo');
        }
        //preguntar si el usuario tiene balance
        $balance = Balance::where('user_id', $user_id)->first();
        //comprobar si puedo descontar el monto
        $descuento = $balance->monto - $producto->garantia;
        if ($descuento <= 0)
        {
            return redirect()->route('index')->with('flash', 'No dispone de fondos suficientes para asumir la garantia, porfavor recarge sus fondos "AQUI"');
        }
        //descontar la garantia al balance si es positivo devolver vista, de lo contrario retornar al index
        $balance->update([
            'monto' => $balance->monto - $producto->garantia
        ]);

        $data = Message::where('subasta_id', $id)->get();
        Return View('chat.show')->with([
            'puja' => $this->puja,
            'data' => $data
        ]);
    }

    public function MessageReceived(Request $request)
    {
        $producto = Producto::where('id', 1)->first();
        $request->message = $producto->precio + 100;
        $producto->precio = $request->message;
        $producto->user_id = Auth::user()->id;
        $producto->update();
        $message = Message::create([
            'subasta_id' => 1,
            'user_id' => Auth::user()->id,
            'message' => $producto->precio + 100
        ]);
        broadcast(new MessageSent($request->user(), $request->message));

        Return response()->json('Message Broadcast');
    }

    public function Test()
    {
        $user = Auth::user();
        $puja = 100;
        $mensajes = Message::all();
        $producto = Producto::where('id', 1)->first();
//        dd($producto);
        return view('livewire.subasta.subasta-form')->with([
            'user'      => $user,
            'puja'      => $puja,
            'mensajes'   => $mensajes,
            'producto'      => $producto
        ]);
    }
}
