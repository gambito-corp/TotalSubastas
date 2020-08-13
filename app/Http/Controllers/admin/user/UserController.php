<?php

namespace App\Http\Controllers\admin\user;

use App\Helpers\Gambito;
use App\Rol;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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

        //subir imagen a storage
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $imagen = $user->name . '_' . $avatar->getClientOriginalName();
            Storage::disk('s3')->put('avatar/' . $imagen, File::get($avatar));
            $user->avatar = $imagen;
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
        $user = User::where('id', $id)->with('Rol')->first();
        $roles = Rol::all();
        $vista = 'update';
        return view('admin.user.form', compact('user', 'roles', 'vista'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rol' => 'required',
            'name' => ['required', 'string', 'max:255', 'unique:users,name,'.$id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
        ]);
        $rol = $request->input('rol');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $avatar = $request->file('avatar');

        $user = User::where('id', $id)->first();

        $user->role_id = $rol != 0 ? $rol : $user->role_id;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password ? $password : $user->password;
        if($avatar){
            $imagen = $user->name.'_'.$avatar->getClientOriginalName();
            Storage::disk('s3')->put('avatar/'.$imagen, File::get($avatar), 'public');
            $user->avatar = $imagen;
        }
        $user->update();

        return redirect()->route('admin.user.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        User::where('id', $id)->first()->delete();
        return redirect()->route('admin.user.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        $user = User::withTrashed()
            ->where('id', $id)
            ->first();
        if ((Auth::user()->isAdmin() || Auth::id() == $id) && $user->avatar != 'default.png'){
            $this->destroyImagen($user->avatar);
        }
        $user->forceDelete();
        return redirect()->route('admin.user.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        User::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.user.trash')->with([
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

    public function getImagen($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()){
            $data = User::withTrashed()->where('id', $id)->first();
            $file = Storage::disk('s3')->get('avatar/'.$data->avatar);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('avatar/ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    protected function destroyImagen($file)
    {
        Storage::disk('s3')->delete('avatar/'.$file);
    }
}
