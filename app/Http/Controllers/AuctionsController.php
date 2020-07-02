<?php

namespace App\Http\Controllers;

use App\Helpers\Gambito;
use Illuminate\Http\Request;

class AuctionsController extends Controller
{
    public $Gambito;

    public function __construct()
    {
        $this->Gambito = new Gambito();
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return view('auction.index');
    }

    public function show()
    {
        return view('auction.show');
    }

    public function live()
    {
        Gambito::checkInicioSubasta();
        Gambito::checkBalance();
        Gambito::descuentoGarantia();
        return view('auction.live');
    }


}
