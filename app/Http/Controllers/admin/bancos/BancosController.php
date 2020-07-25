<?php

namespace App\Http\Controllers\admin\bancos;

use App\Bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BancosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $bancos = Bank::all();
        return view('admin.bancos.view', compact('bancos'));
    }

    public function trash()
    {
        $bancos = Bank::onlyTrashed()->get();
        $trash = true;
        return view('admin.bancos.view', compact('bancos', 'trash'));
    }


    public function create()
    {
        $banco = new Bank();
        return view('admin.bancos.form', compact('banco'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:banks',
            'siglas' => 'required|unique:banks',
        ]);
        Bank::create([
            'nombre' => $request->input('nombre'),
            'siglas' => $request->input('siglas')
        ]);
        return redirect()->route('admin.bancos.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        dd('metodo show bancos controller', $id);
    }


    public function edit($id)
    {
        $banco = Bank::where('id',$id)->firstOrFail();
        return view('admin.bancos.form', compact('banco',));
    }


    public function update($id, Request $request)
    {

        $banco = Bank::where('id',$id)->firstOrFail();
        $request->validate([
            'nombre' => 'unique:banks,nombre,'.$banco->id,
            'siglas' => 'unique:banks,siglas,'.$banco->id,
        ]);
        $banco->nombre = $request->input('nombre');
        $banco->siglas = $request->input('siglas');
        $banco->update();
        return redirect()->route('admin.bancos.index')->with([
            'message' => 'El Rol Fue  Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }




    public function delete($id)
    {
        $banco = Bank::where('id',$id)->firstOrFail();
        $banco->delete();
        return redirect()->route('admin.bancos.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }


    public function destroy($id)
    {
        Bank::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.bancos.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }


    public function restore($id)
    {
        Bank::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.bancos.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
