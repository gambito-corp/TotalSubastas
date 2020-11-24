<?php

namespace App\Http\Controllers\admin\documentos;

use App\Helpers\Gambito;
use App\Http\Controllers\Controller;
use App\LegalPerson;
use App\User;
use Illuminate\Http\Request;
use App\DocumentosVehiculo as Data;
use App\Company;
use App\Lot;
use App\Producto;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class DocumentosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Empresa', 'Lote', 'Producto')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::with('Empresa', 'Lote', 'Producto')->where('empresa_id', $company->id)->get();
            }
        }
        return view('admin.documentos.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Empresa', 'Lote', 'Producto')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::onlyTrashed()->with('Empresa', 'Lote', 'Producto', 'Marca', 'Modelo')->where('empresa_id', $company->id)->get();
            }
        }
        $trash = true;
        return view('admin.documentos.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        $empresas = Company::all();
        $lotes = Lot::all();
        $productos = Producto::all();
        $vista = 'create';
        return view('admin.documentos.form', compact('data', 'empresas', 'lotes', 'productos', 'vista'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "titulo1"       => 'required',
            "titulo2"       => "nullable",
            "titulo3"       => "nullable",
            "documento1"    => "required",
            "documento2"    => "nullable",
            "documento3"    => "nullable"
        ]);
        $data = new Data();
        $data->empresa_id = $request->input('empresa_id');
        $data->lote_id = $request->input('lote_id');
        $data->producto_id = $request->input('producto_id');
        $data->titulo1 = $request->input('titulo1');
        $data->titulo2 = $request->input('titulo2');
        $data->titulo3 = $request->input('titulo3');
        $data->load('Empresa', 'Lote', 'Producto');


        if ($request->hasFile('documento1')) {
            $archivo = $data->titulo1. '_' . $request->file('documento1')->getClientOriginalName();
            $file = $request->file('documento1');
            $ruta = 'documentos/vehiculos/'.
                Str::slug($data->Empresa->nombre, "-").
                '/'.
                Str::slug($data->Lote->nombre, "-").
                '/' .
                Str::slug($data->Producto->nombre, "-").
                '/' .
                Str::slug($data->titulo1, "-").
                '.'.
                $file->getClientOriginalExtension();

            $this->upload($file, $ruta);
            $data->documento1 = $archivo;
        }
        if ($request->hasFile('documento2')) {
            $archivo = $data->titulo2. '_' . $request->file('documento2')->getClientOriginalName();
            $file = $request->file('documento2');
            $ruta = 'documentos/vehiculos/'.
                Str::slug($data->Empresa->nombre, "-").
                '/'.
                Str::slug($data->Lote->nombre, "-").
                '/' .
                Str::slug($data->Producto->nombre, "-").
                '/' .
                Str::slug($data->titulo2, "-").
                '.'.
                $file->getClientOriginalExtension();

            $this->upload($file, $ruta);
            $data->documento2 = $archivo;
        }
        if ($request->hasFile('documento3')) {
            $archivo = $data->titulo3. '_' . $request->file('documento3')->getClientOriginalName();
            $file = $request->file('documento3');
            $ruta = 'documentos/vehiculos/'.
                Str::slug($data->Empresa->nombre, "-").
                '/'.
                Str::slug($data->Lote->nombre, "-").
                '/' .
                Str::slug($data->Producto->nombre, "-").
                '/' .
                Str::slug($data->titulo3, "-").
                '.'.
                $file->getClientOriginalExtension();

            $this->upload($file, $ruta);
            $data->documento3 = $archivo;
        }
//        dd($data->documento1);
        $data->save();
        return redirect()->route('admin.documentos.index')->with([
            'message' => 'El Documento Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    protected function upload($file, $ruta)
    {
        Storage::disk('s3')
            ->put(
                $ruta,
                File::get($file),
                'public'
            );
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Data::where('id', $id)->with('Empresa', 'Lote', 'Producto')->first();
        $empresas = Company::all();
        $lotes = Lot::all();
        $productos = Producto::all();
        $vista = 'update';
        return view('admin.documentos.form', compact('data', 'empresas', 'lotes', 'productos', 'vista'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            "titulo1"       => 'required',
            "titulo2"       => "nullable",
            "titulo3"       => "nullable",
            "documento1"    => "required",
            "documento2"    => "nullable",
            "documento3"    => "nullable"
        ]);


        $data =  Data::where('id', $id)->first();
        $data->titulo1 = $request->input('titulo1');
        $data->titulo2 = $request->input('titulo2');
        $data->titulo3 = $request->input('titulo3');
        $data->load('Empresa', 'Lote', 'Producto');


        if ($request->hasFile('documento1')) {
            $archivo = $data->titulo1. '_' . $request->file('documento1')->getClientOriginalName();
            $file = $request->file('documento1');
            $ruta = 'documentos/vehiculos/'.
                Str::slug($data->Empresa->nombre, "-").
                '/'.
                Str::slug($data->Lote->nombre, "-").
                '/' .
                Str::slug($data->Producto->nombre, "-").
                '/' .
                Str::slug($data->titulo1, "-").
                '.'.
                $file->getClientOriginalExtension();

            $this->upload($file, $ruta);
            $data->documento1 = $archivo;
        }
        if ($request->hasFile('documento2')) {
            $archivo = $data->titulo2. '_' . $request->file('documento2')->getClientOriginalName();
            $file = $request->file('documento2');
            $ruta = 'documentos/vehiculos/'.
                Str::slug($data->Empresa->nombre, "-").
                '/'.
                Str::slug($data->Lote->nombre, "-").
                '/' .
                Str::slug($data->Producto->nombre, "-").
                '/' .
                Str::slug($data->titulo2, "-").
                '.'.
                $file->getClientOriginalExtension();

            $this->upload($file, $ruta);
            $data->documento2 = $archivo;
        }
        if ($request->hasFile('documento3')) {
            $archivo = $data->titulo3. '_' . $request->file('documento3')->getClientOriginalName();
            $file = $request->file('documento3');
            $ruta = 'documentos/vehiculos/'.
                Str::slug($data->Empresa->nombre, "-").
                '/'.
                Str::slug($data->Lote->nombre, "-").
                '/' .
                Str::slug($data->Producto->nombre, "-").
                '/' .
                Str::slug($data->titulo3, "-").
                '.'.
                $file->getClientOriginalExtension();

            $this->upload($file, $ruta);
            $data->documento3 = $archivo;
        }
//
        $data->update();
        return redirect()->route('admin.documentos.index')->with([
            'message' => 'El Documento Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('admin.documentos.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        $data = Data::withTrashed()
            ->where('id', $id)
            ->first();
        if (Auth::user()->isAdmin() || Auth::id() == $data->user_id){
            $this->destroyImagen($data, $data->documento1);
            $this->destroyImagen($data, $data->documento2);
            $this->destroyImagen($data, $data->documento3);
        }

        $data->forceDelete();
        return redirect()->route('admin.documentos.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.documentos.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }

    public function getDownload($id, $file){
        $data = Data::with('Empresa', 'Lote', 'Producto')->where('id', $id)->first();
        $ruta = 'documentos/vehiculos/'.
            Str::slug($data->Empresa->nombre, "-").
            '/'.
            Str::slug($data->Lote->nombre, "-").
            '/' .
            Str::slug($data->Producto->nombre, "-").
            '/';
        $header = [
            'Content-Disposition: attachment',
            'Cache-Control: no-cache',
            'Content-Type: application/pdf',
        ];

        return Storage::disk('s3')->download($ruta.$file, $file, $header);
    }

    protected function destroyImagen($data, $file)
    {
        $ruta = 'documentos/vehiculos/'.
            Str::slug($data->Empresa->nombre, "-").
            '/'.
            Str::slug($data->Lote->nombre, "-").
            '/' .
            Str::slug($data->Producto->nombre, "-").
            '/';
        Storage::disk('s3')->delete($ruta.$file);
    }
}
