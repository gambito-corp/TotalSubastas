<?php

namespace App\Http\Controllers\admin\empresa;

use App\Address;
use App\Helpers\Gambito;
use App\Http\Controllers\Controller;
use App\Company as Data;
use App\LegalPerson;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Juridica','Direccion')->get();
        return view('admin.empresa.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Juridica','Direccion')->get();
        $trash = true;
        return view('admin.empresa.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        $personas = LegalPerson::all();
        $direccion = Address::all();
        return view('admin.empresa.form', compact('data', 'personas', 'direccion'));
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'persona_juridica_id'   => 'required',
            'direccion_id'          => 'required',
            'nombre'                => 'required',
            'razon_social'          => 'required',
            'ruc'                   => 'required',
            'email'                 => 'required|email',
            'informacion'           => 'string',
            'telefono'              => 'required',
            'imagen'                => 'image'
        ]);

        $persona_juridica_id = $request->input('persona_juridica_id');
        $direccion_id = $request->input('direccion_id');
        $nombre = $request->input('nombre');
        $razon_social = $request->input('razon_social');
        $ruc = $request->input('ruc');
        $email = $request->input('email');
        $informacion = $request->input('informacion');
        $telefono = $request->input('telefono');
        $imagen = $request->file('imagen');

        $empresa = new Data();
        $empresa->persona_juridica_id = $persona_juridica_id;
        $empresa->direccion_id = $direccion_id;
        $empresa->nombre = $nombre;
        $empresa->razon_social = $razon_social;
        $empresa->ruc = $ruc;
        $empresa->email = $email;
        $empresa->informacion = $informacion;
        $empresa->telefono = $telefono;

        //subir imagen a storage
        if($imagen){
            $imagen_name = $empresa->nombre.'_'.$imagen->getClientOriginalName();
            Storage::disk('s3')->put('empresa/'.$imagen_name, File::get($imagen));
            $empresa->imagen = $imagen_name;
        }
        $empresa->save();
        return redirect()->route('admin.empresa.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id, Request $request)
    {
        //
    }

    public function delete($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function restore($id)
    {
        //
    }
    public function getImagen($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()->isAdmin() || Auth::id() == $id){
            $data = Data::where('id', $id)->first();
            $file = Storage::disk('s3')->get('empresa/'.$data->imagen);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('empresa/ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    protected function destroyImagen($file)
    {
        Storage::disk('s3')->delete('bouchers/'.$file);
    }
}
