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
        $marcas = Brand::all();
        return view('admin.marcas.view', compact('marcas'));
    }

    public function trash()
    {
        $marcas = Brand::onlyTrashed()->get();
        $trash = true;
        return view('admin.marcas.view', compact('marcas', 'trash'));
    }

    public function create()
    {
        $marca = new Brand();
        return view('admin.marcas.form', compact('marca'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:brands',
        ]);
        Brand::create([
            'nombre' => $request->input('nombre'),
            'slug' => Str::of($request->input('nombre'))->slug('-')->lower()
        ]);
        return redirect()->route('admin.marcas.index')->with([
            'message' => 'La Marca Fue Creada Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show(Brand $marca)
    {
        dd($marca, 'show');
    }

    public function edit(Brand $marca)
    {
        return view('admin.marcas.form', compact('marca'));
    }

    public function update(Brand $marca, Request $request)
    {
        $request->validate([
            'nombre' => 'unique:brands,nombre,'.$marca->nombre,
        ]);
        $marca->nombre = $request->input('nombre');
        $marca->update();

        return redirect()->route('admin.marcas.index')->with([
            'message' => 'La Marca Fue Actualizada Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete(Brand $marca)
    {
        $marca->delete();
        return redirect()->route('admin.marcas.index')->with([
            'message' => 'La Marca Fue Borrada',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Brand::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.marcas.trash')->with([
            'message' => 'La Marca Fue Eliminada',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Brand::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.marcas.trash')->with([
            'message' => 'La Marca Fue Restaurada',
            'alerta' => 'warning'
        ]);
    }
}
