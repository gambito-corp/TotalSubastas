<?php

namespace App\Http\Controllers\admin\juridica;

use App\Address;
use App\Bank;
use App\Helpers\Gambito;
use App\LegalPerson as Data;
use App\Person;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class JuridicaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Banco', 'Direccion', 'Direccion2')->get();
        return view('admin.juridica.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Banco', 'Direccion', 'Direccion2')->get();
        $trash = true;
        return view('admin.juridica.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        $personas = User::where('tipo', 'juridica')->get();
        $direccion = Address::all();
        $bancos = Bank::all();
        return view('admin.juridica.form', compact('data', 'personas', 'direccion', 'bancos'));
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'persona_id'    => 'required',
            'banco_id'      => 'required',
            'direccion_id'  => 'required',
            'nombre'        => 'required',
            'razon_social'  => 'required',
            'ruc'           => 'required',
            'numero_cuenta' => 'required',
            'telefono'      => 'required'
        ]);

        $persona_id = $request->input('persona_id');
        $banco_id = $request->input('banco_id');
        $direccion_id = $request->input('direccion_id');
        $nombre = $request->input('nombre');
        $razon_social = $request->input('razon_social');
        $ruc = $request->input('ruc');
        $numero_cuenta = $request->input('numero_cuenta');
        $telefono = $request->input('telefono');
        $email = User::where('id', $persona_id)->first()->email;

        $juridica = new Data();
        $juridica->user_id = $persona_id;
        $juridica->banco_id = $banco_id;
        $juridica->direccion_id = $direccion_id;
        $juridica->nombre = $nombre;
        $juridica->razon_social = $razon_social;
        $juridica->ruc = $ruc;
        $juridica->numero_cuenta = $numero_cuenta;
        $juridica->telefono = $telefono;
        $juridica->email = $email;
        $juridica->save();
        return redirect()->route('admin.juridica.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        dd('Vista Show de Legal '.$id);
    }

    public function edit($id)
    {
        $data = Data::where('id', $id)->first();
        $direccion = Address::all();
        $bancos = Bank::all();
        return view('admin.juridica.form', compact('data',  'direccion', 'bancos'));
    }

    public function update($id, Request $request)
    {
        $validate = $this->validate($request,[
            'banco_id'      => '',
            'direccion_id'  => '',
            'nombre'        => '',
            'razon_social'  => '',
            'ruc'           => '',
            'numero_cuenta' => '',
            'telefono'      => ''
        ]);

        $banco_id = $request->input('banco_id');
        $direccion_id = $request->input('direccion_id');
        $nombre = $request->input('nombre');
        $razon_social = $request->input('razon_social');
        $ruc = $request->input('ruc');
        $numero_cuenta = $request->input('numero_cuenta');
        $telefono = $request->input('telefono');

        $juridica = Data::where('id', $id)->first();
        $juridica->banco_id = $banco_id;
        $juridica->direccion_id = $direccion_id;
        $juridica->nombre = $nombre;
        $juridica->razon_social = $razon_social;
        $juridica->ruc = $ruc;
        $juridica->numero_cuenta = $numero_cuenta;
        $juridica->telefono = $telefono;
        $juridica->update();
        return redirect()->route('admin.juridica.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->first()->delete();
        return redirect()->route('admin.juridica.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->first()
            ->forceDelete();
        return redirect()->route('admin.juridica.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.juridica.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
