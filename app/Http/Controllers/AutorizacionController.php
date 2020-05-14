<?php

namespace App\Http\Controllers;


use App\Autorizacion;
use App\helpers;
// use App\Http\Requests\SaveAutorizacionRequest;
use App\Http\Requests\SaveControllerRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class AutorizacionController extends Controller
{
    public function index()
    {
        $datos = Autorizacion::all();
        // dd($datos);
        return view('BackOffice.Autorizacion.tabla', compact('datos'));
    }

    public function trash()
    {
        $datos = Autorizacion::onlyTrashed()->get();
        return view('BackOffice.Autorizacion.tabla', compact('datos'));
    }

    public function create()
    {        
        $data = new Autorizacion();
        return view('BackOffice.Autorizacion.formulario', compact('data'));
    }

    public function store(SaveControllerRequest $request)
    {
        Autorizacion::create($request->validated());
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Contolador Creado, Si necesitas puedes Modificarlo',
            'class' => 'success'
        ]);
    }

    public function show($autorizacion)
    {
        $data = Autorizacion::get()->where('slug', $autorizacion)->first();
        return view('backOffice.Autorizacion.simple', compact('data'));
    }

    public function edit($autorizacion)
    {
        $data = Autorizacion::get()->where('slug', $autorizacion)->first();
        return view('BackOffice.Autorizacion.formulario', compact('data'));
    }

    public function update(SaveControllerRequest $request, Autorizacion $autorizacion)
    {
        $autorizacion->update($request->validated());
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Controlador Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(Autorizacion $autorizacion)
    {
        $autorizacion->delete();
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Conttrolador Dado de baja Este Controlador Ya no se Podra Usar mas',
            'class' => 'warning'
        ]);
    }

    public function restore($id)
    {
        Autorizacion::onlyTrashed($id)->where('slug', $id)->first()->restore();
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Controlador Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($autorizacion)
    {

        Autorizacion::onlyTrashed($autorizacion)->first()->forceDelete();
        return redirect()->route('Autorizacion.trash')->with([
            'flash' => 'Controlador Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'error'
        ]);
    }

}
