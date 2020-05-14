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
        dd('meddleware', old(), request());
        if(!isset($request->input()['permiso_id'])){
            return redirect()
            ->route('Acceso.create')
            ->with([
                'flash' => 'obligatoriamente tienes que asignar un permiso',
                'class' => 'warning'
                ]);
        }

        for ($i=0; $i < count($request->input()['permiso_id']) ; $i++) {
            $consulta[] = Acceso::where('rol_id', request()->input('rol_id'))
            ->where('autorizacion_id', request()->input('autorizacion_id'))
            ->where('permiso_id', $request->input()['permiso_id'][$i])
            ->get()
            ->load('permiso')
            ->first();
        }
        $null = [null];
        $consulta2 = $consulta;
        $consulta2 = array_diff($consulta2, $null);
        $consulta = array_diff($consulta, $consulta2);

        // dd($consulta2);
        $permiso = [];

        for ($i=0; $i < count($consulta2); $i++) {
            $permiso[] = $consulta2[$i]->permiso->nombre;
        }

        $permisos = implode($permiso, ', ');
        if(empty($consulta)){
            // dd(request()->routeis('Acceso.create'));
            if(request()->routeis('Acceso.create')){
                return back()
                ->with([
                    'permiso' => $permisos,
                    'flash' => 'los metodos '.$permisos.' Ya estan con el rol y el controlador',
                    'class' => 'warning'
                    ]);
            }else{
                return back()
                ->with([
                    'permiso' => $permisos,
                    'flash' => 'los metodos '.$permisos.' Ya estan con el rol y el controlador2 (modificacion para edicion)',
                    'class' => 'warning'
                    ]);
            }
        }else{
            // dd('par request');
            return $next($request);
        }


    }
}
