<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Rol;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::with('Rol')->get();
        return view('admin.user.view', compact('usuarios'));
    }

    public function trash()
    {
        $usuarios = User::onlyTrashed()->with('Rol')->get();
        $trash = true;
        return view('admin.user.view', compact('usuarios', 'trash'));
    }

    public function create()
    {
        $user = new User();
        $roles = Rol::all();
        $vista = 'create';
        return view('admin.user.form', compact('user', 'roles', 'vista'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rol' => 'required',
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',
        ]);

        $user = new User();
        $user->role_id = $request->input('rol');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $avatarNombre = 'img/users/'.time().$avatar->getClientOriginalName();
            $avatar->move(public_path().'/img/users/', $avatarNombre);
            $user->avatar = $avatarNombre;
        }
        $user->save();

        return redirect()->route('admin.user.index')->with([
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
        $pais = Country::where('id', $id)->firstOrFail();
        $paises = Country::where('parent_id', null)->select('id', 'nombre')->get();
        $vista = 'update';
        return view('admin.pais.form', compact('pais', 'paises', 'vista'));
    }

    public function update(Request $request, $id)
    {
        $country = Country::where('id', $id)->first();
        $request->validate([
            'nombre' => 'required|unique:countries,nombre,' . $country->id,
            'descripcion' => 'required',
            'codigo' => 'required',
        ]);
        $parent = null;
        if ($request->input('pais') != 0) {
            $parent = $request->input('pais');
            if ($request->input('departamento') != 0) {
                $parent = $request->input('departamento');
                if ($request->input('provincia') != 0) {
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
        $pais = Country::where('id', $id)->firstOrFail();
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

    public function personificacion($id)
    {

        if(auth()->user()->puedePersonificar())
        {
            if(!session()->has('impersonificacion_id')){
                session(['impersonificacion_id' => auth()->id()]);
            }
            $personificando = auth()->loginUsingId($id);
            return back()->with([
                'message' => 'Estas Personificando al usuario '.$personificando->name,
                'alerta' => 'info'

            ]);
        }
        return back()->with([
            'message' => 'No tienes Permitida esta accion',
            'alerta' => 'danger'
        ]);
    }

    public function impersonificacion()
    {
        auth()->loginUsingId(session('impersonificacion_id'));
        session()->forget('impersonificacion_id');
        return back()->with([
            'message' => 'Volviste a ser tu',
            'alerta' => 'info'
        ]);
    }
}
