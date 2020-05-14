<?php

namespace App\Http\Controllers;


use App\Acceso;
use App\Autorizacion;
use App\Rol;
use App\helpers;
use App\Http\Requests\SaveAccesosRequest;
use App\Permiso;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class AccesoController extends Controller
{
    public function index()
    {
        // $datos = Acceso::with('rol', 'permiso')->get();
        $datos = Acceso::get()->load('rol', 'permiso', 'autorizacion');

        return view('BackOffice.Acceso.tabla', compact('datos'));
    }

    public function trash()
    {
        $datos = Acceso::onlyTrashed()->get()->load('rol', 'permiso', 'autorizacion');
        return view('BackOffice.Acceso.tabla', compact('datos'));
    }

    public function create()
    {
        $data = new Acceso();
        $roles = Rol::all();
        $autorizacion =Autorizacion::all();
        $permisos =Permiso::all();

        return view('BackOffice.Acceso.formulario', compact('data', 'roles', 'permisos', 'permisos', 'autorizacion'));
    }

    public function store(SaveAccesosRequest $request)
    {
        // dd($request->input(), 'store');

        foreach($request->input()['permiso_id'] as $permiso){
           $acceso = new Acceso();
           $acceso->rol_id = $request->input('rol_id');
           $acceso->autorizacion_id = $request->input('autorizacion_id');
           $acceso->permiso_id = $permiso;

           $consulta = Acceso::where('rol_id', $acceso->rol_id)
           ->where('autorizacion_id', $acceso->autorizacion_id)
           ->where('permiso_id', $acceso->permiso_id)
           ->first();
        //    dd(isset($consulta));
           if(!isset($consulta)){
               $acceso->save();
           }
        }

        return redirect()->route('Acceso.index')->with([
            'flash' => 'Acceso Creado, Si necesitas puedes Modificarlo',
            'class' => 'success'
        ]);
    }

    public function show($acceso)
    {
        $data = Acceso::get()->where('slug', $acceso)->first();
        return view('backOffice.Acceso.simple', compact('data'));
    }

    public function edit($acceso)
    {
        $data = Acceso::get()->where('id', $acceso)->load('rol', 'permiso', 'autorizacion')->first();

        $roles = Rol::all();
        $autorizacion =Autorizacion::all();
        $permisos = Permiso::all();
        $todo = Acceso::all()->where('rol_id', $data->rol->id);
        foreach ($todo as $id => $tod) {
            $todo[$id] = $tod->permiso_id;
        }
        return view('BackOffice.Acceso.formulario', compact('data', 'roles', 'permisos', 'autorizacion', 'todo'));
    }

    public function update(SaveAccesosRequest $request, Acceso $acceso)
    {

        $acceso->update($request->validated());
        return redirect()->route('Acceso.index')->with([
            'flash' => 'Acceso Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(Acceso $acceso)
    {
        $acceso->delete();
        return redirect()->route('Acceso.index')->with([
            'flash' => 'Acceso Dado de baja Este Acceso Ya no se Podra Usar mas',
            'class' => 'info'
        ]);
    }

    public function restore($id)
    {
        Acceso::onlyTrashed($id)->restore();
        return redirect()->route('Acceso.index')->with([
            'flash' => 'Acceso Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($acceso)
    {
        Acceso::onlyTrashed($acceso)->first()->forceDelete();
        return redirect()->route('Acceso.trash')->with([
            'flash' => 'Acceso Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'danger'
        ]);
    }

}
