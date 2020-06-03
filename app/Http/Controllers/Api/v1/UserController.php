<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\JwtAuth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\User;


class UserController extends Controller
{

    public function index (Request $request)
    {
        //Authorization
        $token = $request->header('Authorization');
        $jwt = new JwtAuth();
        $checkToken = $jwt->chekToken($token);
        $auth = $jwt->chekToken($token, true);
        if($checkToken){
            $respuesta = [
                'data'=>[
                    'tipe'=>'Listado de Usuarios',
                    'id'=> $auth->sub,
                    'attributes'=>[
                        $user = User::all()
                    ],
                ],
                'meta'=>[
                    'status'=>200,
                    'title'=>'Listado de usuarios',
                    'detail'=>'Listado de todos los usuarios',
                ],
                'link' =>[
                    'self' => route('user.index')
                ]
            ];
        }else{
            $respuesta = [
                'error'=>[
                    'status'=>419,
                    'title'=>'Token Caducado',
                    'detail'=>'El Token Caduco, Porfavor Inicia Sesion',
                ],
                'meta'=>[
                    'status'=>419,
                    'title'=>'Token Caducado',
                    'detail'=>'El Token Caduco, Porfavor Inicia Sesion',
                ]
            ];
        }
        return response()->json(($respuesta), $respuesta['meta']['status']);
    }

    public function create ()
    {

    }

    public function store ( Request $request )
    {

    }

    public function show (Request $request, User $user )
    {

    }

    public function edit ( User $user )
    {

    }

    public function update (Request $request, User $user )
    {

    }

    public function destroy ( User $user )
    {

    }

}
