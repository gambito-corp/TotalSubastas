<?php

namespace App\Http\Controllers;


use App\User;
use App\Rol;
use App\helpers;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\SaveUserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $datos = User::get()->load('rol');
        return view('BackOffice.User.tabla', compact('datos'));
    }

    public function trash()
    {
        $datos = User::onlyTrashed()->get();
        return view('BackOffice.User.tabla', compact('datos'));
    }

    public function Personificacion()
    {
        if(auth()->user()->canImpersonate()){
            session([
                'personificacion' => auth()->id()
            ]);
            auth()->loginUsingId(request('user_id'));
            return back()->with([
                'flash' => "Estas Personificando al usuario con el ID ".request('user_id'),
                'class' => 'success'
            ]);
        }
        return back()->with([
            'flash' => "No Puedes Personificar ".request('user_id'),
            'class' => 'danger'
        ]);
    }

    public function Inpersonificacion()
    {
        auth()->loginUsingId(session('personificacion'));
        session()->forget('personificacion');
        return back()->with([
            'flash' => "Dejaste de personificar al usuario ".request('user_id'),
            'class' => 'success'
        ]);
    }

    public function create()
    {
        $data = new User();
        $roles = Rol::all();
        return view('BackOffice.User.formulario', compact('data', 'roles'));
    }

    public function store(CreateUserRequest $request)
    {

        User::create($request->validated());
        return redirect()->route('User.index')->with([
            'flash' => 'User Creado, Si necesitas puedes Modificarlo',
            'class' => 'success'
        ]);
    }

    public function show($user)
    {
        $data = User::get()->where('username', $user)->first();

        return view('backOffice.User.simple', compact('data'));
    }

    public function edit($user)
    {
        $data = User::get()->where('username', $user)->first();
        $roles = Rol::all();
        return view('BackOffice.User.formulario', compact('data', 'roles'));
    }

    public function update(SaveUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('User.index')->with([
            'flash' => 'User Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('User.index')->with([
            'flash' => 'User Dado de baja Este User Ya no se Podra Usar mas',
            'class' => 'info'
        ]);
    }

    public function restore($id)
    {
        User::onlyTrashed($id)->first()->restore();
        return redirect()->route('User.index')->with([
            'flash' => 'User Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($user)
    {
        User::onlyTrashed($user)->first()->forceDelete();
        return redirect()->route('User.trash')->with([
            'flash' => 'User Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'danger'
        ]);
    }

}
