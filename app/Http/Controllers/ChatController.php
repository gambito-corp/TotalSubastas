<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Helpers\Gambito;
use Illuminate\Http\Request;
use App\User;

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

        broadcast(new MessageSent($request->user(), $request->message));

        Return response()->json('Message Broadcast');
    }
}
