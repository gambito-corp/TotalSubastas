<?php

namespace App\Http\Controllers\Auth;

use App\Address;
use App\Http\Controllers\Controller;
use App\Person;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        dd('leego al validador');
        return Validator::make($data, [
            "nombre" => ['required', 'string', 'max:255'],
            "apellido" => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "tel" => ['required', 'string', 'max:255'],
            "dni" => ['required', 'string', 'max:255'],
            "Check" => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        dd('leego al create');
        $user_name = substr($data['nombre'],0,3).substr($data['apellido'],0,3).substr($data['dni'],0,3);
//        dd('Creo el Nombre de usuario');
        $user = new User();
        $persona = new Person();
        $user->role_id = 2;
        $user->name = $user_name;
        $user->email = $data['email'];
        $user->avatar = 'users/default.png';
        $user->password = Hash::make($data['password']);
        $save = $user->save();
//        $user->find();
//        dd($save, $user);
//        $user = User::create([
//
//            'name' => $user_name,
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ])->dd();
        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
//        dd('Metodo Register Antes del validador');
        $this->validator($request->all())->validate();
//        dd('Metodo Register despues del validador');

//        dd('Metodo Register antes del evento registered');
        event(new Registered($user = $this->create($request->all())));
//        dd('Metodo Register despues del evento registered');

//        dd('Metodo Register antes de llamar al usuario recien creado');
        $user1 = User::all()->last();
//        dd('Metodo Register antes de crear persona');
        Person::create([
            'user_id' => $user1->id,
            'nombres' => $request->input('nombre'),
            'apellidos' => $request->input('apellido'),
            'numero_documento' => $request->input('dni'),
            'telefono'=> $request->input('tel'),
            'email' => $request->input('email'),
        ]);
//        dd('Metodo Register despues de crearla');

        $this->guard()->login($user);
//        dd('Metodo Register despues de autenticar');

        if ($response = $this->registered($request, $user)) {
            dd('Metodo Registerdentro de la respuesta if');
            return $response;
        }
//dd('Metodo Register antes de la falida final');
        return $request->wantsJson()
            ? new Response('', 201)
            : redirect($this->redirectPath());
    }

}
