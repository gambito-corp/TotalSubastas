<?php

namespace App\Http\Controllers;

use App\ModelVehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModeloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $modelos = ModelVehicle::with('Marca')->get();
        return view('admin.modelo.view', compact('modelos'));
    }

    public function trash()
    {
        $modelos = ModelVehicle::onlyTrashed()->get();
        $trash = true;
        return view('admin.modelo.view', compact('modelos', 'trash'));
    }

    public function create()
    {
        $modelo = new ModelVehicle();
        return view('admin.modelo.form', compact('modelo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:modelo',
        ]);
        ModelVehicle::create([
            'nombre' => $request->input('nombre'),
            'slug' => Str::of($request->input('nombre'))->slug('-')->lower()
        ]);
        return redirect()->route('admin.modelos.index')->with([
            'message' => 'El Modelo Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show(ModelVehicle $modelo)
    {
        dd($modelo, 'show');
    }

    public function edit(ModelVehicle $modelo)
    {
        return view('admin.modelo.form', compact('modelo'));
    }

    public function update(ModelVehicle $modelo, Request $request)
    {
        $request->validate([
            'nombre' => 'unique:modelvehicles,nombre,'.$modelo->nombre,
        ]);
        $modelo->nombre = $request->input('nombre');
        $modelo->update();

        return redirect()->route('admin.modelos.index')->with([
            'message' => 'El Modelo Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete(ModelVehicle $modelo)
    {
        $modelo->delete();
        return redirect()->route('admin.modelos.index')->with([
            'message' => 'El Modelo Fue Borrado',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        ModelVehicle::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.modelos.trash')->with([
            'message' => 'El Modelo Fue Eliminado',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        ModelVehicle::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.modelos.trash')->with([
            'message' => 'El Modelo Fue Restaurado',
            'alerta' => 'warning'
        ]);
    }
}
