<?php

namespace App\Http\Middleware;

use App\Acceso;
use Closure;
use App\Http\Requests\SaveAccesosRequest;

class AccesoMiddleware
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

        // dd($request->input()['permiso_id']);
        foreach($request->input()['permiso_id'] as $permiso){
            $consulta = Acceso::where('rol_id', request()->input('rol_id'))->where('autorizacion_id', request()->input('autorizacion_id'))->where('permiso_id', $permiso)->get()->first();
        }
        // dd(isset($consulta->id));
        if(isset($consulta->id)){
            dd('si');
        }else{
            return $next($request);
        }


    }
}
