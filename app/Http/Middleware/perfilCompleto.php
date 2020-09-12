<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class perfilCompleto
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()){
            if (Auth::user()->completo){
                return $next($request);
            }
            return redirect()->route('perfil.edit')->with(['message' => 'Por favor Primero Completa el Perfil', 'alerta' => 'danger']);
        }else{
            return $next($request);
        }

    }
}
