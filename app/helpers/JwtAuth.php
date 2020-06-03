<?php
    namespace App\Helpers;

    use Firebase\JWT\JWT;
    use Illuminate\Support\Facades\DB;
    use App\User;

    class JwtAuth
    {
        public $key;

        public function __construct()
        {
            $this->key = 'Clave_secreta_de_total_subastas-960717583';
        }

        public function signup($user, $getToken = null)
        {
            //generar el token con los datos del usuario identificad
            if($user) {
                $token = [
                    'sub' => $user->id,
                    'rol' => $user->role_id,
                    'user' => $user->name,
                    'email' => $user->email,
                    'avatar' => $user->avatar,
                    'telefono' => $user->telefono,
                    'email_ver' => $user->email_verified_at,
                    'telefono_ver' => $user->telefono_verified_at,
                    'iat' => time(),
                    'exp' => time() + (60 * 60 * 3),
                ];

                $jwt = JWT::encode($token, $this->key, 'HS256');
                $decode = JWT::decode($jwt, $this->key, ['HS256']);
                if (is_null($getToken)){
                    $data = $jwt;
                }else{
                    $data = $decode;
                }

                //devolver los datos decodificados o el token en funcion del parametro
            }else{
                $data = [
                    'status' =>'error',
                    'messaje'=>'Login Incorrecto'
                ];
            }
            return $data;


        }

        /**
         * @return string
         */
        public function chekToken($jwt, $getIdentity = false)
        {
            $auth = false;

            try{
                $jwt = str_replace('"', '', $jwt);
                $decode = JWT::decode($jwt, $this->key, ['HS256']);
            }catch (\UnexpectedValueException $e){
                $auth = false;
            }catch (\DomainException $e){
                $auth = false;
            }
            if (!empty($decode) && is_object($decode) && isset($decode->sub)){
                $auth = true;
            }else{
                $auth = false;
            }

            if($getIdentity){
                return $decode;
            }
            return $auth;
        }

    }
