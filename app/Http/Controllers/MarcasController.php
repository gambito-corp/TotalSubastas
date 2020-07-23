<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MarcasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $marcas = Brand::with('Parent')->get();
        return view('admin.marcas.view', compact('marcas'));
    }

    public function trash()
    {
        $marcas = Brand::onlyTrashed()->with('Parent')->get();
        $trash = true;
        return view('admin.marcas.view', compact('marcas', 'trash'));
    }

    public function create()
    {
        $marca = new Brand();
        $marcas = Brand::where('parent_id', null)->select('id', 'nombre')->get();
        return view('admin.marcas.form', compact('marca', 'marcas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:brands',
        ]);
//        dd($request->input());
        Brand::create([
            'parent_id' => $request->input('parent_id') == 'Selecciona una marca para el modelo' ? null : $request->input('parent_id'),
            'nombre' => $request->input('nombre'),
            'slug' => Str::of($request->input('nombre'))->slug('-')->lower()
        ]);
        return redirect()->route('admin.marcas.index')->with([
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
        $marca = Brand::where('id',$id)->firstOrFail();
        $marcas = Brand::where('parent_id', null)->select('id', 'nombre')->get();
        return view('admin.marcas.form', compact('marca', 'marcas'));
    }

    public function update($id, Request $request)
    {
        $rol = Brand::where('id',$id)->firstOrFail();
        $request->validate([
            'name' => 'unique:marcas,name,'.$rol->name,
        ]);
        $marcas->name = $request->input('name');
        $marcas->display_name = Str::of($request->input('name'))->slug('-')->lower();
        $marcas->update();
        return redirect()->route('admin.marcas.index')->with([
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
