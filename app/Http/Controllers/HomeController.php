<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Helpers\Gambito;
use App\Message;
use App\Producto;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Hashids\Hashids;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
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
 * monto_id
 *
 *
 *
 * */
