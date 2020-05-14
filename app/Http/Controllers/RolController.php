<?php

namespace App\Http\Controllers;

use App\Rol;
use App\helpers;
use App\Http\Requests\SaveRoleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RolController extends Controller
{

    public function index()
    {
        $datos = Rol::all();
        return view('BackOffice.Rol.tabla', compact('datos'));
    }

    public function trash()
    {
        $datos = Rol::onlyTrashed()->get();
        return view('BackOffice.Rol.tabla', compact('datos'));
    }

    public function create()
    {
        $data = new rol();
        return view('BackOffice.Rol.formulario', compact('data'));
    }

    public function store(SaveRoleRequest $request)
    {
        
        Rol::create($request->validated());
        return redirect()->route('rol.index')->with([
            'flash' => 'Rol Creado, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function show($rol)
    {
        $data = rol::get()->where('slug', $rol)->first();
        // dd($data);
        return view('BackOffice.Rol.simple', compact('data'));
    }

    public function edit($rol)
    {

        $data = Rol::get()->where('slug', $rol)->first();
        return view('BackOffice.Rol.formulario', compact('data'));
    }

    public function update(SaveRoleRequest $request, Rol $rol)
    {
        $rol->update($request->validated());
        return redirect()->route('rol.index')->with([
            'flash' => 'Rol Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('rol.index')->with([
            'flash' => 'Rol Dado de baja Este Rol Ya no se Podra Usar mas',
            'class' => 'info'
        ]);
    }

    public function restore($id)
    {
        Rol::onlyTrashed($id)->where('slug', $id)->first()->restore();
        return redirect()->route('rol.index')->with([
            'flash' => 'Rol Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($rol)
    {
        Rol::onlyTrashed($rol)->first()->forceDelete();
        return redirect()->route('rol.trash')->with([
            'flash' => 'Rol Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'danger'
        ]);
    }

}
