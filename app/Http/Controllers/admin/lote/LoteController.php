<?php

namespace App\Http\Controllers\admin\lote;

use App\Company;
use App\Http\Controllers\Controller;
use App\LegalPerson;
use App\Lot as Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Empresa')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::with('Empresa')->where('empresa_id', $company->id)->get();
            }
        }
        return view('admin.lote.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Empresa')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::onlyTrashed()->with('Empresa')->where('empresa_id', $company->id)->get();
            }
        }
        $trash = true;
        return view('admin.lote.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        $empresas = Company::all('id', 'nombre');
        $empresa = null;
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $empresa = Company::where('id', $juridica->id)->first();
            $empresa = $empresa->id;
        }
        return view('admin.lote.form', compact('data', 'empresas', 'empresa'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'empresa_id'    => 'required',
            'nombre'      => 'required',
            'descripcion'  => 'required',
            'subasta_at'        => 'required'
        ]);

        $persona_juridica_id = $request->input('empresa_id');
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $slug = Str::slug($request->input('nombre'), '_');
        $subasta_at = $request->input('subasta_at');

        $lote = new Data();
        $lote->empresa_id = $persona_juridica_id;
        $lote->nombre = $nombre;
        $lote->descripcion = $descripcion;
        $lote->slug = $slug;
        $lote->subasta_at = $subasta_at;
        $lote->save();
        return redirect()->route('admin.lote.index')->with([
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
        $empresas = Company::all('id', 'nombre');
        $empresa = null;
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $empresa = Company::where('id', $juridica->id)->first();
            $empresa = $empresa->id;
        }
        return view('admin.lote.form', compact('data', 'empresas', 'empresa'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'nombre'      => 'required',
            'descripcion'  => 'required',
            'subasta_at'        => 'required'
        ]);

        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $slug = Str::slug($request->input('nombre'), '_');
        $subasta_at = $request->input('subasta_at');

        $lote =Data::where('id', $id)->first();
        $lote->nombre = $nombre;
        $lote->descripcion = $descripcion;
        $lote->slug = $slug;
        $lote->subasta_at = $subasta_at;
        $lote->update();
        return redirect()->route('admin.lote.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->first()->delete();
        return redirect()->route('admin.lote.index')->with([
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
        return redirect()->route('admin.lote.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.lote.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
