<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class frontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function registro()
    {
        return view('auth.registro');
    }

}
