<?php

namespace App\Http\Controllers;

use App\ActiveAuc;
use App\Balance;
use App\Company;
use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        return view('home.index');
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
}
