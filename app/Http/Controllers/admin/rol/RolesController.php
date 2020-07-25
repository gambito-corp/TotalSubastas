<?php

namespace App\Http\Controllers\admin\rol;

use App\Http\Controllers\Controller;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Rol::all();
        return view('admin.rol.view', compact('roles'));
    }

    public function trash()
    {
        $roles = Rol::onlyTrashed()->get();
        $trash = true;
        return view('admin.rol.view', compact('roles', 'trash'));
    }

    public function create()
    {
        $rol = new Rol();
        return view('admin.rol.form', compact('rol'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:rols',
        ]);
        Rol::create([
            'name' => $request->input('name'),
            'display_name' => Str::of($request->input('name'))->slug('-')->lower()
        ]);
        return redirect()->route('admin.rol.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        dd($id, 'show');
    }

    public function edit($id)
    {
        $rol = Rol::where('id',$id)->firstOrFail();
        return view('admin.rol.form', compact('rol'));
    }

    public function update($id, Request $request)
    {
        $rol = Rol::where('id',$id)->firstOrFail();
        $request->validate([
            'name' => 'unique:rols,name,'.$rol->id,
        ]);
        $rol->name = $request->input('name');
        $rol->display_name = Str::of($request->input('name'))->slug('-')->lower();
        $rol->update();
        return redirect()->route('admin.rol.index')->with([
            'message' => 'El Rol Fue  Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        $rol = Rol::where('id',$id)->firstOrFail();
        $rol->delete();
        return redirect()->route('admin.rol.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Rol::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.rol.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Rol::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.rol.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
