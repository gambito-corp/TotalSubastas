<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Hashids\Hashids;

class HomeController extends Controller
{
    public $Gambito;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Gambito = new Gambito();
        $this->middleware('auth')->only('home');
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
        return view('home.home');
    }
    public function aboutus()
    {
        return view('about.aboutus');
    }
    public function terms()
    {
        return view('terms.conditions');
    }
    public function faqs()
    {
        return view('faqs.index');
    }
    public function auction(Request $request)
    {
      return view('auction.index');
    }
    public function auctionDetail(Request $request, $id)
    {
        return view('auction.show', [
            'auction' => $request,
            'id' => $id
        ]);
    }
    public function auctionLiveDetail(Request $request, $id)
    {
        // Poder acceder solo durante el tiempo que esta permitido en la BD de lo contrario no poder entrar
        $this->Gambito->checkInicioSubasta($id);

        //preguntar si el usuario tiene balance
        $this->Gambito->checkBalance();

        //comprobar si puedo descontar el monto, descontarlo de asi poder y registrar que fue descontado para futura devolucion
        $this->Gambito->descuentoGarantia();



        $data = Message::where('subasta_id', $id)->get();
        return view('livewire.auctions.live')->with([
            'data' => $data
        ]);
    }
    public function myaccount(Request $request)
    {
        if (!$request->session()->has('users')) {
            Alert::warning('Warning title', 'Warning Message');
            return redirect()->back();
        } else {
            return view('auth.myaccount.show');
        }
    }
    public function myaccountEdit(Request $request)
    {
        return view('auth.myaccount.edit');
    }
    public function sell(Request $request)
    {
        if (!$request->session()->has('users')) {
            Alert::warning('Warning title', 'Warning Message');
            return redirect()->back();
        } else {
            return view('sell.index');
        }
    }
    public function myaccountFilestore(Request $request)
    {
        $path = public_path() . '/uploads/';
        $files = $request->file('file');
        foreach ($files as $file) {
            $fileName = $file->getClientOriginalName();
            $file->move($path, $fileName);
        }
    }
    public function users()
    {
        return view('users.index');
    }
    public function game()
    {
        return view('game.show');
    }
}


/*
 * id
 * producto_id
 * user_id
 * monto
 * */
