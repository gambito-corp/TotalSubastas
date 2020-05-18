<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\UsoPortal;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    public function ShowLoginForm()
    {

        return view('auth.login');
    }

    public function Login(LoginRequest $credenciales)
    {

        if(Auth::attempt($credenciales->validated())){
            $navegador = request()->server('HTTP_USER_AGENT');
            $ip = request()->server('REMOTE_ADDR');
            $user_id =auth()->user()->id;
            $appuso = new UsoPortal();
            $appuso->user_id = $user_id;
            $appuso->navegador = $navegador;
            $appuso->ip = $ip;
            $appuso->save();


            return redirect()->route('voyager.dashboard');
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
