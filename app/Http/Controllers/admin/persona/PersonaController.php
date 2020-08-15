<?php

namespace App\Http\Controllers\admin\persona;

use App\Bank;
use App\User;
use App\Address;
use App\Person as Data;
use App\Helpers\Gambito;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Usuario', 'Direccion', 'Banco')->get();
        return view('admin.persona.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Usuario', 'Direccion', 'Banco')->get();
        $trash = true;
        return view('admin.persona.view', compact('data', 'trash' ));
    }

    public function create()
    {
        $data = new Data();
        $usuarios = User::doesntHave('Persona')->get();
        $direccion = Address::doesntHave('Persona')->get();
        $bancos = Bank::all();
        return view('admin.persona.form', compact('data', 'usuarios', 'direccion', 'bancos'));
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'user'              => 'required',
            'banco'             => 'required',
            'direccion'         => 'required',
            'nombres'           => 'required',
            'apellidos'         => 'required',
            'tipo_documento'    => 'required',
            'numero_documento'  => 'required',
            'digito_documento'  => 'required',
            'genero'            => 'required',
            'estado_civil'      => 'required',
            'cuenta_banco'      => 'required',
            'telefono'          => 'required',
            'b_day'             => 'required',
            'dni[]'             => 'image',
        ]);

        $user = $request->input('user');
        $banco = $request->input('banco');
        $direccion = $request->input('direccion');
        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $tipo_documento = $request->input('tipo_documento');
        $numero_documento = $request->input('numero_documento');
        $digito_documento = $request->input('digito_documento');
        $genero = $request->input('genero');
        $estado_civil = $request->input('estado_civil');
        $cuenta_banco = $request->input('cuenta_banco');
        $telefono = $request->input('telefono');
        $b_day = $request->input('b_day');
        $juridica = $request->input('juridica');
        $dni = $request->file('dni');

        $persona = new Data();
        $persona->user_id = $user;
        $persona->banco_id = $banco;
        $persona->direccion_id = $direccion;
        $persona->nombres = $nombres;
        $persona->apellidos = $apellidos;
        $persona->tipo_documento = $tipo_documento;
        $persona->numero_documento = $numero_documento;
        $persona->digito_documento = $digito_documento;
        $persona->genero = $genero;
        $persona->estado_civil = $estado_civil;
        $persona->cuenta_banco = $cuenta_banco;
        $persona->telefono = $telefono;
        $persona->email = $persona->Usuario->email;
        $persona->b_day = $b_day;
        $persona->juridica = $juridica;

        //subir imagen a storage
        if($dni){
            $imagen1 = $persona->Usuario->name.'_'.$dni[0]->getClientOriginalName();
            $imagen2 = $persona->Usuario->name.'_'.$dni[1]->getClientOriginalName();
            Storage::disk('s3')->put('dni/'.$imagen1, File::get($dni[0]));
            Storage::disk('s3')->put('dni/'.$imagen2, File::get($dni[1]));
            $persona->dni_front = $imagen1;
            $persona->dni_back = $imagen2;
        }

        $persona->save();
        return redirect()->route('admin.persona.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        dd('Vista Show de persona '.$id);
    }

    public function edit($id)
    {
        $data = Data::with('Usuario')->where('id', $id)->first();
        $usuarios = User::doesntHave('Persona')->get();
        $direccion = Address::all();
        $bancos = Bank::all();
        return view('admin.persona.form', compact('data', 'usuarios', 'direccion', 'bancos'));
    }

    public function update($id, Request $request)
    {
        $banco = $request->input('banco');
        $direccion = $request->input('direccion');
        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $tipo_documento = $request->input('tipo_documento');
        $numero_documento = $request->input('numero_documento');
        $digito_documento = $request->input('digito_documento');
        $genero = $request->input('genero');
        $estado_civil = $request->input('estado_civil');
        $cuenta_banco = $request->input('cuenta_banco');
        $telefono = $request->input('telefono');
        $b_day = $request->input('b_day');
        $juridica = $request->input('juridica');
        $dni = $request->file('dni');

        $persona = Data::with('Usuario')->where('id', $id)->first();
        $persona->banco_id = $banco;
        $persona->direccion_id = $direccion;
        $persona->nombres = $nombres;
        $persona->apellidos = $apellidos;
        $persona->tipo_documento = $tipo_documento;
        $persona->numero_documento = $numero_documento;
        $persona->digito_documento = $digito_documento;
        $persona->genero = $genero;
        $persona->estado_civil = $estado_civil;
        $persona->cuenta_banco = $cuenta_banco;
        $persona->telefono = $telefono;
        $persona->b_day = $b_day;
        $persona->juridica = $juridica;

        //subir imagen a storage
        if($dni){
            $imagen1 = $persona->Usuario->name.'_'.$dni[0]->getClientOriginalName();
            $imagen2 = $persona->Usuario->name.'_'.$dni[1]->getClientOriginalName();
            Storage::disk('s3')->put('dni/'.$imagen1, File::get($dni[0]));
            Storage::disk('s3')->put('dni/'.$imagen2, File::get($dni[1]));
            $persona->dni_front = $imagen1;
            $persona->dni_back = $imagen2;
        }

        $persona->update();
        return redirect()->route('admin.persona.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->first()->delete();
        return redirect()->route('admin.persona.index')->with([
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
            if(isset($data->dni_front)){
                $this->destroyImagen($data->dni_front);
            }
            if(isset($data->dni_back)){
                $this->destroyImagen($data->dni_back);
            }
        }

        $data->forceDelete();
        return redirect()->route('admin.persona.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.persona.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }

    public function getImagen1($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){
            $data = Data::withTrashed()->where('id', $id)->first();
            $file = Storage::disk('s3')->get('dni/'.$data->dni_front);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('dni/ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    public function getImagen2($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){
            $data = Data::withTrashed()->where('id', $id)->first();
            $file = Storage::disk('s3')->get('dni/'.$data->dni_back);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('dni/ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    protected function destroyImagen($file)
    {
        Storage::disk('s3')->delete('dni/'.$file);
    }
}
