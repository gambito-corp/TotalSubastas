<?php

namespace App\Http\Controllers;

use App\Audit;
use App\Balance;
use App\Garantia;
use App\Like;
use App\Participacion;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show ()
    {
        $id = Auth::id();

        $persona = Person::where('user_id', $id)->first();

        $audit = Audit::where('user_id', $id)->get()->pluck('created_at')->last()->format('d-M-Y');

        $balance = Balance::where('user_id', $id)->pluck('monto')->first();
        $balance = intval($balance);

        $garantia = Garantia::where('user_id', $id)->pluck('monto')->sum();

        $likes = Like::where('user_id', $id)->count();

        $ofertas = Participacion::where('user_id', $id)
            ->get()->pluck('participacion')->sum();

        $participacion = Participacion::where('user_id', $id)
            ->get()->count();

        $activas = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query){
                $query->where('finalized_at', '>', now());
            })->with('Productos')->get();
        $pasadas = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query){
                $query->where('finalized_at', '<', now());
            })->with('Productos')->get();
        $ganando = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query)use($id){
                $query->where('user_id', $id)
                    ->where('finalized_at', '>', now());
            })->with('Productos')->get();
        $ganadas = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query)use($id){
                $query->where('user_id', $id)
                    ->where('finalized_at', '<', now());
            })->with('Productos')->get();

        $garantiaDetail = Balance::where('user_id', $id)->get();

        return view('perfil.account', compact('persona', 'audit', 'balance', 'garantia', 'likes', 'ofertas', 'participacion', 'activas', 'pasadas', 'ganando','ganadas', 'garantiaDetail'));
    }

    public function edit ()
    {
        return view('perfil.profile-edit');
    }
}
