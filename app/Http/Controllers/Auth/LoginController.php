<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {

        $user = request()->input('user');
        $user =$this->username($user);
        $credenciales = $this->validate(request(), [
            'user' => 'string|required',
            'password'              => 'string|required'
        ]);
        $credenciales = [
            $user => $credenciales['user'],
            'password' => $credenciales['password']
        ];

        if(Auth::attempt($credenciales)){
            return redirect()->route('admin.index');
        }
        return redirect()->route('login')
            ->with(['flash' => 'Error en tu Logueo Por favor revisa tus credenciales']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function username($credenciales)
    {

        if(filter_var($credenciales, FILTER_VALIDATE_EMAIL)){
            return 'email';
        }elseif(is_numeric($credenciales)){
            return 'telefono';
        }else {
            return 'username';
        }
    }
}
