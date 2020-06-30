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

    public function index(Request $request)
    {
        return view('auction.index');
    }

    public function show(Request $request, $id)
    {
        return view('auction.show', [
            'auction' => $request,
            'id' => $id
        ]);
    }

    public function live(Request $request, $id)
    {
        // Poder acceder solo durante el tiempo que esta permitido en la BD de lo contrario no poder entrar
        $this->Gambito->checkInicioSubasta($id);

        //preguntar si el usuario tiene balance
        $this->Gambito->checkBalance();

        //comprobar si puedo descontar el monto, descontarlo de asi poder y registrar que fue descontado para futura devolucion
        $this->Gambito->descuentoGarantia();

        return view('auction.live')->with([
            'data' => $this->Gambito->data()
        ]);
    }


}
