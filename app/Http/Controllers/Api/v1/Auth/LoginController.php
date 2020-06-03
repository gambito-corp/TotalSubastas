<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use App\helpers\JwtAuth;
use Illuminate\Http\Request;
use http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\User;

class LoginController extends Controller
{
    public function Login(Request $request)
    {


        $jwtAuth = new JwtAuth();

        $json = $request->input('json', null);
        $params = json_decode($request->input('json'));

        if(filter_var($params->user, FILTER_VALIDATE_EMAIL)){
            $usuario = 'email';
        }elseif(is_numeric($params->user)){
            $usuario = 'telefono';
        }else {
            $usuario = 'name';
        }

        $query = User::where($usuario, $params->user)->first();

        $array = [
            'email' => $query->email,
            'password'=>$params->password
        ];

        $credencial = Auth()->attempt($array);

        if($credencial){
            auth()->loginUsingId($query->id);
            if (!empty($params->getToken)){

                $respuesta = [
                    'data'=>[
                        'tipe'=>'Datos del Usuario Autenticado',
                        'id'=> Auth()->user()->id,
                        'attributes'=>[
                            $signup = $jwtAuth->signup(Auth()->user(), true)
                        ],
                    ],
                    'meta'=>[
                        'status'=>200,
                        'title'=>'Usuario Autenticado',
                        'detail'=>'El Usuario Fue Autenticado Con Exito',
                    ],
                    'link' =>[
                        'self' => route('user.show', Auth()->user()->name)
                    ]
                ];


            }else{
                $respuesta = [
                    'data'=>[
                        'tipe'=>'Datos del Usuario Autenticado',
                        'id'=> Auth()->user()->id,
                        'attributes'=>[
                            'token'=>$signup = $jwtAuth->signup(Auth()->user())
                        ],
                    ],
                    'meta'=>[
                        'status'=>200,
                        'title'=>'Usuario Autenticado',
                        'detail'=>'El Usuario Fue Autenticado Con Exito',
                    ]
                ];
            }
        }else{
            $respuesta = [
                'error'=>[
                    'status'=>422,
                    'title'=>'Fallo La Autenticacion de Usuario',
                    'detail'=>'El Usuario No Pudo Ser Autenticado Debido a que o no Existe o Fallo Al Contraseña',
                ],
                'meta'=>[
                    'status'=>422,
                    'title'=>'Fallo La Autenticacion de Usuario',
                    'detail'=>'El Usuario No Pudo Ser Autenticado Debido a que o no Existe o Fallo Al Contraseña',
                ]
            ];
        }

        return response()->json(($respuesta), $respuesta['meta']['status']);

    }
}
