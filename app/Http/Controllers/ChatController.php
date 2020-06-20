<?php

namespace App\Http\Controllers;

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

    public function ShowChat()
    {
        $id = \Auth::user()->id;
        Return View('chat.show')->with([
            'puja' => $this->puja
        ]);
    }

    public function MessageReceived(Request $request)
    {
        $producto = Producto::where('id', 1)->first();
        $request->message = $producto->precio + 100;
        $producto->precio = $request->message;
        $producto->user_id = Auth::user()->id;
        $producto->update();
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
