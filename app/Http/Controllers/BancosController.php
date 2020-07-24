<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BancosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancos = Bank::all();
        return view('admin.bancos.view', compact('bancos'));
    }

    /**
     * Display a listing of the resource from Softdelete.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $bancos = Bank::onlyTrashed()->get();
        $trash = true;
        return view('admin.bancos.view', compact('bancos', 'trash'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banco = new Bank();
        return view('admin.bancos.form', compact('banco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('metodo show bancos controller', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banco = Bank::where('id',$id)->firstOrFail();
        return view('admin.bancos.form', compact('banco',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
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



    /**
     * Delete the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $banco = Bank::where('id',$id)->firstOrFail();
        $banco->delete();
        return redirect()->route('admin.bancos.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Restore the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
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
