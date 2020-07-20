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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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


//    public function aboutus()
//    {
//        return view('about.aboutus');
//    }
//    public function terms()
//    {
//        return view('terms.conditions');
//    }
//    public function faqs()
//    {
//        return view('faqs.index');
//    }

//    public function myaccount(Request $request)
//    {
//        if (!$request->session()->has('users')) {
//            Alert::warning('Warning title', 'Warning Message');
//            return redirect()->back();
//        } else {
//            return view('auth.myaccount.show');
//        }
//    }
//    public function myaccountEdit(Request $request)
//    {
//        return view('auth.myaccount.edit');
//    }
//    public function sell(Request $request)
//    {
//        if (!$request->session()->has('users')) {
//            Alert::warning('Warning title', 'Warning Message');
//            return redirect()->back();
//        } else {
//            return view('sell.index');
//        }
//    }
//    public function myaccountFilestore(Request $request)
//    {
//        $path = public_path() . '/uploads/';
//        $files = $request->file('file');
//        foreach ($files as $file) {
//            $fileName = $file->getClientOriginalName();
//            $file->move($path, $fileName);
//        }
//    }
//    public function users()
//    {
//        return view('users.index');
//    }
//    public function game()
//    {
//        return view('game.show');
//    }
}
