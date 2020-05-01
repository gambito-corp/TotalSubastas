<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registro()
    {
        return view('log.registro');
    }

    public function login()
    {
        return view('log.login');
    }

    public function logueo(Request $request)
    {
        $credenciales = $this->validate(request(), [
            'user'      => 'string|required',
            'password'  => 'string|required'
        ]);
        if(filter_var($credenciales['user'], FILTER_VALIDATE_EMAIL)){
            $credenciales = [
                'email'     => $credenciales['user'],
                'password'  => $credenciales['password']
            ];
        }elseif(is_numeric($credenciales['user'])){
            $credenciales = [
                'telefono'     => $credenciales['user'],
                'password'  => $credenciales['password']
            ];
        }else {
            $credenciales = [
                'username'     => $credenciales['user'],
                'password'  => $credenciales['password']
            ];
        }


        if(Auth::attempt($credenciales)){
            $return = [
                'ruta'=>'admin.index',
                'session'=>'',
                'clase'=>'',
                'mensaje'=>''
            ];
        }else{
            $return = [
                'ruta'=>'user.login',
                'session'=>'message',
                'clase'=>'error',
                'mensaje'=>'No existe Ningun usuario en la BD con estas Credenciales, porfavor Revisa tu User o tu Contraseña, si el Problema Persiste Comunicate a soporte@totalsubastas.com, Gracias'
            ];
        }
        return redirect()->route($return['ruta'])
            ->with($return['session'], $return['mensaje']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {

        if(isset(auth()->user()->rol) && auth()->user()->rol->nombre == 'Administrador'){
            $request = $request->validated();
            $request['password'] =  bcrypt($request['password']);
            $administrador = ["roles_id" => 1];
            $request = array_merge($administrador, $request);
            User::create($request);
            return redirect()->route('user.register')->with('message', 'exito');
        }
        return 'fallo';



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
