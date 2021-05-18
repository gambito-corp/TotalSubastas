<?php

namespace App\Http\Controllers\Auth;

use App\Bank;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.seleccionPersona');
    }

    public function takeTipe(Request $request)
    {
        $data = $request->input('tipo');
        session(['tipo' => $data]);
        return redirect()->route('FormUser');
    }

    public function FormUser()
    {

        return view('auth.register', ['data' => session('tipo'), 'bancos' => Bank::all('id', 'siglas')]);
    }


    public function registro(CreateUserRequest $request, $tipo)
    {
        $user = User::registerUser($request->all(), $tipo);
        return redirect()->route('index')->with(['message' => 'Te hemos enviado un correo para confirmar tu cuenta', 'alerta'=>'primary alert-link']);
//        return redirect()->route('index')->with(['modal' => 'modal']);
//        $user = User::registerUser($request->all());



//        $this->guard()->login($user);

//        if ($response = $this->registered($request, $user)) {
//
//            return $response;
//        }
//        return $request->wantsJson()
//            ? new Response('', 201)
//            : redirect($this->redirectPath());
    }

}
