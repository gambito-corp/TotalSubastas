<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function test ()
    {
        return view('test.index');
    }

    public function TestEnviado(Request $request)
    {


        broadcast(new MessageSent(Auth::user(), 'hola mundo este es el mensaje'));
        return response()->json('enviado');
//        return view('test.index');
    }
}
