<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function test ()
    {
        return view('test.index');
    }
}
