<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function ShowLoginForm()
    {
        return view('auth.login');
    }

    public function Login(LoginRequest $credenciales)
    {

        if(Auth::attempt($credenciales->validated())){
            return redirect()->route('home');
        }

        return back()->withErrors([
            'user' => 'Estas Credenciales no Concuerdan con Nuestros Registros'
        ])->withInput(request(['user']));
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }


    // /*
    // |--------------------------------------------------------------------------
    // | Login Controller
    // |--------------------------------------------------------------------------
    // |
    // | This controller handles authenticating users for the application and
    // | redirecting them to your home screen. The controller uses a trait
    // | to conveniently provide its functionality to your applications.
    // |
    // */

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


}
