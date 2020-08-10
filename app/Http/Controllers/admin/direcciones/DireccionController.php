<?php

namespace App\Http\Controllers\admin\direcciones;

use App\Address;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $direcciones = Address::with(['Usuario', 'Pais', 'Departamento', 'Provincia', 'Distrito'])->get();
        return view('admin.direccion.view', compact('direcciones'));
    }

    public function trash()
    {
        $direcciones = Address::onlyTrashed()->with(['Usuario', 'Pais', 'Departamento', 'Provincia', 'Distrito'])->get();
        $trash = true;
        return view('admin.direccion.view', compact('direcciones', 'trash'));
    }

    public function create()
    {
        $direccion = new Address();
        $vista = 'create';
        return view('admin.direccion.form', compact('direccion', 'vista'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario'       => 'required',
            'pais'          => 'required',
            'departamento'  => 'required',
            'provincia'     => 'required',
            'distrito'      => 'required',
            'via'           => 'required',
            'dir1'          => 'required|string',
            'numero'        => 'required|string',
            'titulo'        => 'required|string',
            'int_ext'       => 'required',
        ]);

        $usuario = $request->input('usuario');
        $pais = $request->input('pais');
        $departamento = $request->input('departamento');
        $provincia = $request->input('provincia');
        $distrito = $request->input('distrito');
        $via = $request->input('via');
        $dir1 = $request->input('dir1');
        $dir2 = $request->input('dir2');
        $numero = $request->input('numero');
        $titulo = $request->input('titulo');
        $int_ext = $request->input('int_ext');
        $ref = $request->input('ref');

        Address::Create([
            'user_id'           => intval($usuario),
            'pais_id'           => intval($pais),
            'departamento_id'   => intval($departamento),
            'provincia_id'      => intval($provincia),
            'distrito_id'       => intval($distrito),
            'tipo_via'          => $via,
            'direccion1'        => $dir1,
            'direccion2'        => $dir2,
            'numero'            => $numero,
            'int_ext'           => $int_ext,
            'referencia'               => $ref,
            'titulo_direccion'  => $titulo
        ]);

        return redirect()->route('admin.address.index')->with([
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
        $pais = Address::where('id',$id)->firstOrFail();
        $direcciones = Address::where('parent_id', null)->select('id', 'nombre')->get();
        $vista = 'update';
        return view('admin.direccion.form', compact('pais', 'paises', 'vista'));
    }

    public function update(Request $request, $id)
    {
        $Address = Address::where('id', $id)->first();
        $request->validate([
            'nombre' => 'required|unique:countries,nombre,'.$Address->id,
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
        $Address->parent_id = $parent;
        $Address->nombre = $request->input('nombre');
        $Address->descripcion = $request->input('descripcion');
        $Address->codigo = $request->input('codigo');
        $Address->update();
        return redirect()->route('admin.direccion.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        $pais = Address::where('id',$id)->firstOrFail();
        $pais->delete();
        return redirect()->route('admin.direccion.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Address::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.direccion.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Address::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.direccion.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
