<?php

namespace App\Http\Controllers;


use App\Permiso;
use App\helpers;
use App\Http\Requests\SavePemisoRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PermisoController extends Controller
{
    public function index()
    {
        $datos = Permiso::all();
        return view('BackOffice.Permiso.tabla', compact('datos'));
    }

    public function trash()
    {
        $datos = Permiso::onlyTrashed()->get();
        return view('BackOffice.Permiso.tabla', compact('datos'));
    }

    public function create()
    {
        $data = new Permiso();
        return view('BackOffice.Permiso.formulario', compact('data'));
    }

    public function store(SavePemisoRequest $request)
    {
        Permiso::create($request->validated());
        return redirect()->route('Permiso.index')->with([
            'flash' => 'Permiso Creado, Si necesitas puedes Modificarlo',
            'class' => 'success'
        ]);
    }

    public function show($permiso)
    {
        $data = Permiso::get()->where('slug', $permiso)->first();
        return view('backOffice.Permiso.simple', compact('data'));
    }

    public function edit($permiso)
    {

        $data = Permiso::get()->where('slug', $permiso)->first();
        return view('BackOffice.Permiso.formulario', compact('data'));
    }

    public function update(SavePemisoRequest $request, Permiso $permiso)
    {
        $permiso->update($request->validated());
        return redirect()->route('Permiso.index')->with([
            'flash' => 'Permiso Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(Permiso $permiso)
    {
        $permiso->delete();
        return redirect()->route('Permiso.index')->with([
            'flash' => 'Permiso Dado de baja Este Permiso Ya no se Podra Usar mas',
            'class' => 'warning'
        ]);
    }

    public function restore($id)
    {
        Permiso::onlyTrashed($id)->where('slug', $id)->first()->restore();
        return redirect()->route('Permiso.index')->with([
            'flash' => 'Permiso Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($permiso)
    {
        Permiso::onlyTrashed($permiso)->first()->forceDelete();
        return redirect()->route('Permiso.trash')->with([
            'flash' => 'Permiso Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'error'
        ]);
    }
}
