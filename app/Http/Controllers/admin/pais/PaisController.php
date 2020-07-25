<?php

namespace App\Http\Controllers\admin\pais;

use App\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $paises = Country::with('Parent')->get();
        return view('admin.pais.view', compact('paises'));
    }

    public function trash()
    {
        $paises = Country::onlyTrashed()->with('Parent')->get();
        $trash = true;
        return view('admin.pais.view', compact('paises', 'trash'));
    }

    public function create()
    {
        $pais = new Country();
        $paises = Country::where('parent_id', null)->select('id', 'nombre', 'parent_id')->get();
        $vista = 'create';
        return view('admin.pais.form', compact('pais', 'paises', 'vista'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:countries',
            'descripcion' => 'required',
            'codigo' => 'required',
        ]);
        $parent = null;
        if($request->input('pais') != 0){
            $parent = $request->input('pais');
            if($request->input('departamento') != 0){
                $parent = $request->input('departamento');
                if($request->input('provincia') != 0){
                    $parent = $request->input('provincia');
                }
            }
        }

        Country::create([
            'parent_id' => $parent,
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'codigo' => $request->input('codigo'),
        ]);
        return redirect()->route('admin.pais.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        dd('show');
    }

    public function edit($id)
    {
        $pais = Country::where('id',$id)->firstOrFail();
        $paises = Country::where('parent_id', null)->select('id', 'nombre')->get();
        $vista = 'update';
        return view('admin.pais.form', compact('pais', 'paises', 'vista'));
    }

    public function update(Request $request, $id)
    {
        $country = Country::where('id', $id)->first();
        $request->validate([
            'nombre' => 'required|unique:countries,nombre,'.$country->id,
            'descripcion' => 'required',
            'codigo' => 'required',
        ]);
        $parent = null;
        if($request->input('pais') != 0){
            $parent = $request->input('pais');
            if($request->input('departamento') != 0){
                $parent = $request->input('departamento');
                if($request->input('provincia') != 0){
                    $parent = $request->input('provincia');
                }
            }
        }
        $country->parent_id = $parent;
        $country->nombre = $request->input('nombre');
        $country->descripcion = $request->input('descripcion');
        $country->codigo = $request->input('codigo');
        $country->update();
        return redirect()->route('admin.pais.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        $pais = Country::where('id',$id)->firstOrFail();
        $pais->delete();
        return redirect()->route('admin.pais.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Country::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.pais.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Country::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.pais.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
