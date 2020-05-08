<?php

namespace App\Http\Controllers;


use App\Autorizacion;
use App\helpers;
use App\Http\Requests\SaveAutorizacionRequest;
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

    public function store(SaveAutorizacionRequest $request)
    {
        Autorizacion::create($request->validated());
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Autorizacion Creado, Si necesitas puedes Modificarlo',
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

    public function update(SaveAutorizacionRequest $request, Autorizacion $autorizacion)
    {
        $autorizacion->update($request->validated());
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Autorizacion Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(Autorizacion $autorizacion)
    {
        $autorizacion->delete();
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Autorizacion Dado de baja Este Autorizacion Ya no se Podra Usar mas',
            'class' => 'info'
        ]);
    }

    public function restore($id)
    {
        Autorizacion::onlyTrashed($id)->restore();
        return redirect()->route('Autorizacion.index')->with([
            'flash' => 'Autorizacion Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($autorizacion)
    {
        Autorizacion::onlyTrashed($autorizacion)->first()->forceDelete();
        return redirect()->route('Autorizacion.trash')->with([
            'flash' => 'Autorizacion Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'danger'
        ]);
    }

}
