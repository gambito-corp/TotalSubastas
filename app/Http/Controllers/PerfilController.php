<?php

namespace App\Http\Controllers;

use App\Address;
use App\Audit;
use App\Balance;
use App\Balance as Data;
use App\Bank;
use App\Country;
use App\Garantia;
use App\Helpers\Gambito;
use App\LegalPerson;
use App\Like;
use App\Participacion;
use App\Person;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'confirm']);
    }
    public function confirm(Request $request, $id){
        $user = User::where('id',Gambito::hash($id,true))->first();
        auth()->loginUsingId($user->id);
        Audit::create([
            'user_id' => Auth::user()->id,
            'ip' => $request->server('REMOTE_ADDR'),
            'tipo_dispositivo' => '',
            'tipo_so' => '',
            'navegador' => $request->server('HTTP_USER_AGENT'),
            'version' => ''
        ]);
        if($user->email_verified_at == null){
            $user->email_verified_at = now();
            $user->update();
        }
        $data = ($user->tipo == 'natural') ? Person::where('user_id',  $user->id)->first() : LegalPerson::where('user_id', $user->id)->first();
        $bancos = Bank::all('id', 'siglas');
        return view('perfil.formulario.paso1', compact('data', 'bancos'));
//        return view('perfil.profile-edit', compact('data', 'bancos'));
    }

    public function show ()
    {
        $id = Auth::id();
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $audit = Audit::where('user_id', $id)->get()->pluck('created_at')->last()->format('d-M-Y');
        $balance = Balance::where('user_id', $id)->where('aprobado', true)->pluck('monto')->sum();
        $balance = intval($balance);
        $garantia = Garantia::where('user_id', $id)->pluck('monto')->sum();
        $likes = Like::where('user_id', $id)->count();
        $ofertas = Participacion::where('user_id', $id)
            ->get()->pluck('participacion')->sum();
        $participacion = Participacion::where('user_id', $id)
            ->get()->count();
        $activas = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query){
                $query->where('finalized_at', '>', now());
            })->with('Productos')->get();
        $pasadas = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query){
                $query->where('finalized_at', '<', now());
            })->with('Productos')->get();
        $ganando = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query)use($id){
                $query->where('user_id', $id)
                    ->where('finalized_at', '>', now());
            })->with('Productos')->get();
        $ganadas = Participacion::where('user_id', $id)
            ->whereHas('Productos', function($query)use($id){
                $query->where('user_id', $id)
                    ->where('finalized_at', '<', now());
            })->with('Productos')->get();
        $garantiaDetail = Balance::where('user_id', $id)->where('aprobado',0)->get();
        return view('perfil.account', compact('data', 'audit', 'balance', 'garantia', 'likes', 'ofertas', 'participacion', 'activas', 'pasadas', 'ganando','ganadas', 'garantiaDetail'));
    }

    public function edit ()
    {
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');

        return view('perfil.profile-edit', compact('data', 'bancos'));
    }

    public function update(Request $request)
    {
        if(Auth::user()->tipo == 'natural') {
            $request->validate([
                "nombres" => "required|string",
                "apellidos" => "required|string",
                "telefono" => "required",
                "email" => "required|email",
                "d_day" => "required|date",
                "tipo_documento" => "required",
                "numero_documento" => "required",
                "pais" => "required",
                "departamento" => "required",
                "provincia" => "required",
                "distrito" => "required",
                "tipo_via" => "required",
                "direccion1" => "required|string",
                "direccion2" => "nullable|string",
                "numero" => "required",
                "int_ext" => "required",
                "referencia" => "required|string",
                "titulo_direccion" => "required|string",
                "banco_id" => "required",
                "numero_cuenta" => "required",
                "genero" => "required",
                "estado_civil" => "required",
                "digito_documento" => "required",
                "dni_front" => "required|image",
                "dni_back" => "required|image",
            ]);
            $nombres = $request->input('nombres');
            $apellidos = $request->input('apellidos');
            $telefono = $request->input('telefono');
            $email = $request->input('email');
            $d_day = $request->input('d_day');
            $tipo_documento = $request->input('tipo_documento');
            $numero_documento = $request->input('numero_documento');
            $pais = $request->input('pais');
            $departamento = $request->input('departamento');
            $provincia = $request->input('provincia');
            $distrito = $request->input('distrito');
            $tipo_via = $request->input('tipo_via');
            $direccion1 = $request->input('direccion1');
            $direccion2 = $request->input('direccion2');
            $numero = $request->input('numero');
            $int_ext = $request->input('int_ext');
            $referencia = $request->input('referencia');
            $titulo_direccion = $request->input('titulo_direccion');
            $banco_id = $request->input('banco_id');
            $numero_cuenta = $request->input('numero_cuenta');
            $genero = $request->input('genero');
            $estado_civil = $request->input('estado_civil');
            $digito_documento = $request->input('tipo_documento');
            $dni_front = $request->file('dni_front');
            $dni_back = $request->file('dni_back');

            //Metodo de Guardado de imagenes

            if ($dni_front) {
                $dni_front_name = 'delante' . $dni_front->getClientOriginalName();
                Storage::disk('s3')->put('dni/' . Auth::user()->name . '/' . $dni_front_name, File::get($dni_front));
            }
            if ($dni_back) {
                $dni_back_name = 'detras' . $dni_back->getClientOriginalName();
                Storage::disk('s3')->put('dni/' . Auth::user()->name . '/' . $dni_back_name, File::get($dni_back));
            }

            $test = DB::transaction(function () use (
                $nombres,
                $apellidos,
                $telefono,
                $email,
                $d_day,
                $tipo_documento,
                $numero_documento,
                $pais,
                $departamento,
                $provincia,
                $distrito,
                $tipo_via,
                $direccion1,
                $direccion2,
                $numero,
                $int_ext,
                $referencia,
                $titulo_direccion,
                $banco_id,
                $numero_cuenta,
                $genero,
                $estado_civil,
                $digito_documento,
                $dni_front_name,
                $dni_back_name
            )
            {
                $user = DB::table('users')
                    ->where('id', Auth::id())
                    ->update([
                        'completo' => true,
                    ]);

                $direccion = Address::updateOrCreate(
                    [
                        'user_id' => Auth::id(),
                        'titulo_direccion' => $titulo_direccion,
                    ],
                    [
                        'user_id' => Auth::id(),
                        'pais_id' => $pais,
                        'departamento_id' => $departamento,
                        'provincia_id' => $provincia,
                        'distrito_id' => $distrito,
                        'tipo_via' => $tipo_via,
                        'direccion1' => $direccion1,
                        'direccion2' => $direccion2,
                        'numero' => $numero,
                        'int_ext' => $int_ext,
                        'referencia' => $referencia,
                        'titulo_direccion' => $titulo_direccion,
                    ]
                );
                DB::table('people')
                    ->where('user_id', Auth::id())
                    ->update([
                        'direccion_id' => $direccion->id,
                        'banco_id' => $banco_id,
                        'nombres' => $nombres,
                        'apellidos' => $apellidos,
                        'tipo_documento' => $tipo_documento,
                        'numero_documento' => $numero_documento,
                        'digito_documento' => $digito_documento,
                        'genero' => $genero,
                        'estado_civil' => $estado_civil,
                        'cuenta_banco' => $numero_cuenta,
                        'b_day' => $d_day,
                        'telefono' => $telefono,
                        'email' => $email,
                        'dni_front' => $dni_front_name,
                        'dni_back' => $dni_back_name,
                    ]);
            });
        }else{
//            dd($request->input());
            $request->validate([
                "nombre"            => "required|string",
                "razon_social"      => "required|string",
                "ruc"               => "required",
                "banco_id"          => "required",
                "numero_cuenta"     => "required",
                "telefono"          => "required",
                "email"             => "required|email",
                "pais"              => "required",
                "departamento"      => "required",
                "provincia"         => "required",
                "distrito"          => "required",
                "tipo_via"          => "required",
                "direccion1"        => "required|string",
                "direccion2"        => "nullable|string",
                "numero"            => "required",
                "int_ext"           => "required",
                "referencia"        => "required|string",
                "titulo_direccion"  => "required|string",
            ]);
            $nombre             = $request->input('nombre');
            $razon_social       = $request->input('razon_social');
            $ruc                = $request->input('ruc');
            $banco_id           = $request->input('banco_id');
            $numero_cuenta      = $request->input('numero_cuenta');
            $telefono           = $request->input('telefono');
            $email              = $request->input('email');
            $pais               = $request->input('pais');
            $departamento       = $request->input('departamento');
            $provincia          = $request->input('provincia');
            $distrito           = $request->input('distrito');
            $tipo_via           = $request->input('tipo_via');
            $direccion1         = $request->input('direccion1');
            $direccion2         = $request->input('direccion2');
            $numero             = $request->input('numero');
            $int_ext            = $request->input('int_ext');
            $referencia         = $request->input('referencia');
            $titulo_direccion   = $request->input('titulo_direccion'). 'direccion de: '.$email;

            $test =  DB::transaction(function () use (
                $nombre,
                $razon_social,
                $ruc,
                $banco_id,
                $numero_cuenta,
                $telefono,
                $email,
                $pais,
                $departamento,
                $provincia,
                $distrito,
                $tipo_via,
                $direccion1,
                $direccion2,
                $numero,
                $int_ext,
                $referencia,
                $titulo_direccion
            ){
                $user = DB::table('users')
                    ->where('id', Auth::id())
                    ->update([
                        'completo' => true
                    ]);

                $direccion = Address::updateOrCreate(
                    [
                        'user_id' => Auth::id(),
                        'titulo_direccion' => $titulo_direccion,
                    ],
                    [
                        'user_id' => Auth::id(),
                        'pais_id' => $pais,
                        'departamento_id' => $departamento,
                        'provincia_id' => $provincia,
                        'distrito_id' => $distrito,
                        'tipo_via' => $tipo_via,
                        'direccion1' => $direccion1,
                        'direccion2' => $direccion2,
                        'numero' => $numero,
                        'int_ext' => $int_ext,
                        'referencia' => $referencia,
                        'titulo_direccion' => $titulo_direccion
                    ]
                );
                DB::table('legal_persons')
                    ->where('user_id', Auth::id())
                    ->update([
                        'banco_id' => $banco_id,
                        'direccion_id' => $direccion->id,
                        'nombre' => $nombre,
                        'razon_social' => $razon_social,
                        'ruc' => $ruc,
                        'numero_cuenta' => $numero_cuenta,
                        'telefono' => $telefono,
                        'email' => $email
                    ]);
            });
        }
        return redirect()->route('index');
    }

    public function recargar()
    {
        $bancos = Bank::all();
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        return view('perfil.recarga', compact( 'bancos', 'data'));
    }

    public function recargarPost(Request $request)
    {
        $request->validate([
            "banco_id"          => "required",
            "monto"             => "required",
            "tipo"              => "required",
            "motivo"            => "required",
            "cuenta"            => "required",
            "transaccion_banco" => "required",
            "abono_at"          => "required",
            "descripcion"       => "required",
            "boucher"           => "image|required"
        ]);

        $banco_id = $request->input('banco_id');
        $monto = $request->input('monto');
        $tipo = $request->input('tipo');
        $motivo = $request->input('motivo');
        $cuenta = $request->input('cuenta');
        $transaccion_banco = $request->input('transaccion_banco');
        $abono_at = $request->input('abono_at');
        $descripcion = $request->input('descripcion');
        $boucher = $request->file('boucher');

        $balance = new Data();
        $balance->user_id = Auth::id();
        $balance->banco_id = $banco_id;
        $balance->monto = $monto;
        $balance->tipo = $tipo;
        $balance->descripcion = $descripcion;
        $balance->motivo = $motivo;
        $balance->cuenta = $cuenta;
        $balance->transaccion_banco = $transaccion_banco;
        $balance->abono_at = $abono_at;
        $balance->load('Usuario');

        $balance->save();
        if($boucher){
            $imagen = $balance->id.'_'.$boucher->getClientOriginalName();
            Storage::disk('s3')->put('bouchers/'.$imagen, File::get($boucher));
            $balance->boucher = $imagen;
            $balance->update();
        }

        return redirect()->route('index')->with([
            'message' => 'Su transacción ha sido ingresada, estamos evaluandola',
            'alerta' => 'success'
        ]);
    }
    public function paso1 ()
    {
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');
        return view('perfil.formulario.paso1', compact('data', 'bancos'));
    }
    public function paso2 (Request $request)
    {
        if (auth()->user()->tipo == 'natural') {
            $request->validate([
                "nombres" => "required",
                "apellidos" => "required",
                "telefono" => "required",
                "email" => "required",
                "d_day" => "required",
                "tipo_documento" => "required",
                "numero_documento" => "required",
            ]);
            Cache::put('nombres', $request->input('nombres'), 5000);
            Cache::put('apellidos', $request->input('apellidos'), 5000);
            Cache::put('telefono', $request->input('telefono'), 5000);
            Cache::put('email', $request->input('email'), 5000);
            Cache::put('d_day', $request->input('d_day'), 5000);
            Cache::put('tipo_documento', $request->input('tipo_documento'), 5000);
            Cache::put('numero_documento', $request->input('numero_documento'), 5000);

        }else {
            $request->validate([
                "nombre" => "required",
                "razon_social" => "required",
                "ruc" => "required",
                "banco_id" => "required",
                "numero_cuenta" => "required",
                "telefono" => "required",
                "email" => "required",
            ]);
            Cache::put('nombre', $request->input('nombre'), 5000);
            Cache::put('razon_social', $request->input('razon_social'), 5000);
            Cache::put('ruc', $request->input('ruc'), 5000);
            Cache::put('banco_id', $request->input('banco_id'), 5000);
            Cache::put('numero_cuenta', $request->input('numero_cuenta'), 5000);
            Cache::put('telefono', $request->input('telefono'), 5000);
            Cache::put('email', $request->input('email'), 5000);
        }
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');
        $pais = Country::where('parent_id', null)->get();
        return view('perfil.formulario.paso2', compact('data', 'bancos', 'pais'));
    }

    public function paso3 (Request $request)
    {
        $request->validate([
            'pais' => 'required|exists:App\Country,id',
        ]);
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');
        $departamento = Country::where('parent_id', $request->input('pais'))->get();
        Cache::put('pais', $request->input('pais'), 5000);
        return view('perfil.formulario.paso3', compact('data', 'bancos', 'departamento'));
    }
    public function paso4 (Request $request)
    {
        $request->validate([
            'departamento' => 'required|exists:App\Country,id',
        ]);
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');
        $provincia = Country::where('parent_id', $request->input('departamento'))->get();
        Cache::put('departamento', $request->input('departamento'), 5000);
        $depa = Cache::get('departamento');
        return view('perfil.formulario.paso4', compact('data', 'bancos', 'provincia', 'depa'));
    }
    public function paso5 (Request $request)
    {
        $request->validate([
            'provincia' => 'required|exists:App\Country,id',
        ]);
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id', Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');
        $distrito = Country::where('parent_id', $request->input('provincia'))->get();
        Cache::put('provincia', $request->input('provincia'), 5000);
        $prov = Cache::get('provincia');
        return view('perfil.formulario.paso5', compact('data', 'bancos', 'distrito', 'prov'));
    }
    public function paso6 (Request $request)
    {
        $request->validate([
            'distrito' => 'required|exists:App\Country,id',
        ]);
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');
        $direccion = Address::where('id',$data->direccion_id)->first();
        if($direccion == null){
            $direccion = new Address();
        }
        Cache::put('distrito', $request->input('distrito'), 5000);
        return view('perfil.formulario.paso6', compact('data', 'bancos', 'direccion'));
    }
    public function paso7 (Request $request)
    {
        $request->validate([
            "direccion1" => "required",
            "referencia" => "nullable",
        ]);
        Cache::put('direccion1', $request->input('direccion1'), 5000);
        Cache::put('referencia', $request->input('referencia'), 5000);
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');
        if(Auth::user()->tipo == 'juridica'){
            $this->GuardadoJuridico();
            return redirect()->route('perfil');
        }
        return view('perfil.formulario.paso7', compact('data', 'bancos'));
    }

    public function paso8 (Request $request)
    {
        $request->validate([
            "banco_id" => 'nullable|exists:banks,id',
            "numero_cuenta" =>  'nullable',
            "genero" => 'required',
            "estado_civil" => 'required',
            "digito_documento" =>  'required',
            "dni_front" => 'nullable',
            "dni_back" => 'nullable',
        ]);
        if(Auth::user()->Persona->dni_front == 'test'){
            $dni_front_name = 'test';
        }else{
            if ($request->file('dni_front')) {

                $dni_front_name = 'delante' . $request->file('dni_front')->getClientOriginalName();
                Storage::disk('s3')->put('dni/' . Auth::user()->name . '/' . $dni_front_name, File::get($request->file('dni_front')));
            }
        }
        if(Auth::user()->Persona->dni_back == 'test'){
            $dni_back_name = 'test';
        }else{
            if ($request->file('dni_back')) {
                $dni_back_name = 'detras' . $request->file('dni_back')->getClientOriginalName();
                Storage::disk('s3')->put('dni/' . Auth::user()->name . '/' . $dni_back_name, File::get($request->file('dni_back')));
            }
        }
        Cache::put('banco_id', $request->input('banco_id'), 5000);
        Cache::put('numero_cuenta', $request->input('numero_cuenta'), 5000);
        Cache::put('genero', $request->input('genero'), 5000);
        Cache::put('estado_civil', $request->input('estado_civil'), 5000);
        Cache::put('digito_documento', $request->input('digito_documento'), 5000);
        Cache::put('dni_front', $dni_front_name, 5000);
        Cache::put('dni_back', $dni_back_name, 5000);

        $this->GuardadoNatural();
        return redirect()->route('perfil');
    }



    public function GuardadoNatural ()
    {
        $nombres = Cache::get('nombres');
        $apellidos = Cache::get('apellidos');
        $telefono = Cache::get('telefono');
        $email = Cache::get('email');
        $d_day = Cache::get('d_day');
        $tipo_documento = Cache::get('tipo_documento');
        $numero_documento = Cache::get('numero_documento');
        $pais = Cache::get('pais');
        $departamento = Cache::get('departamento');
        $provincia = Cache::get('provincia');
        $distrito = Cache::get('distrito');
        $direccion1 = Cache::get('direccion1');
        $referencia = Cache::get('referencia');
        $banco_id = Cache::get('banco_id');
        $numero_cuenta = Cache::get('numero_cuenta');
        $genero = Cache::get('genero');
        $estado_civil = Cache::get('estado_civil');
        $digito_documento = Cache::get('digito_documento');
        $dni_front_name = Cache::get('dni_front');
        $dni_back_name = Cache::get('dni_back');

        $test = DB::transaction(function () use (
            $nombres,
            $apellidos,
            $telefono,
            $email,
            $d_day,
            $tipo_documento,
            $numero_documento,
            $pais,
            $departamento,
            $provincia,
            $distrito,
            $direccion1,
            $referencia,
            $banco_id,
            $numero_cuenta,
            $genero,
            $estado_civil,
            $digito_documento,
            $dni_front_name,
            $dni_back_name
        )
        {
            $user = DB::table('users')
                ->where('id', Auth::id())
                ->update([
                    'completo' => true,
                ]);

            $direccion = Address::updateOrCreate(
                [
                    'user_id' => Auth::id(),
                ],
                [
                    'user_id' => Auth::id(),
                    'pais_id' => $pais,
                    'departamento_id' => $departamento,
                    'provincia_id' => $provincia,
                    'distrito_id' => $distrito,
                    'direccion1' => $direccion1,
                    'referencia' => $referencia,
                    'titulo_direccion' => 'Direccion de usuario: '. Auth::id(),
                ]
            );
            DB::table('people')
                ->where('user_id', Auth::id())
                ->update([
                    'direccion_id' => $direccion->id,
                    'banco_id' => $banco_id,
                    'nombres' => $nombres,
                    'apellidos' => $apellidos,
                    'tipo_documento' => $tipo_documento,
                    'numero_documento' => $numero_documento,
                    'digito_documento' => $digito_documento,
                    'genero' => $genero,
                    'estado_civil' => $estado_civil,
                    'cuenta_banco' => $numero_cuenta,
                    'b_day' => $d_day,
                    'telefono' => $telefono,
                    'email' => $email,
                    'dni_front' => $dni_front_name,
                    'dni_back' => $dni_back_name,
                ]);
        });
    }
    public function GuardadoJuridico ()
    {
        $nombre             = Cache::get('nombre');
        $razon_social       = Cache::get('razon_social');
        $ruc                = Cache::get('ruc');
        $banco_id           = Cache::get('banco_id');
        $numero_cuenta      = Cache::get('numero_cuenta');
        $telefono           = Cache::get('telefono');
        $email              = Cache::get('email');
        $pais               = Cache::get('pais');
        $departamento       = Cache::get('departamento');
        $provincia          = Cache::get('provincia');
        $distrito           = Cache::get('distrito');
        $direccion1         = Cache::get('direccion1');
        $referencia         = Cache::get('referencia');
        DB::transaction(function () use (
            $nombre,
            $razon_social,
            $ruc,
            $banco_id,
            $numero_cuenta,
            $telefono,
            $email,
            $pais,
            $departamento,
            $provincia,
            $distrito,
            $direccion1,
            $referencia
        ){
            $user = DB::table('users')
                ->where('id', Auth::id())
                ->update([
                    'completo' => true
                ]);

            $direccion = Address::updateOrCreate(
                [
                    'user_id' => Auth::id(),
                ],
                [
                    'user_id' => Auth::id(),
                    'pais_id' => $pais,
                    'departamento_id' => $departamento,
                    'provincia_id' => $provincia,
                    'distrito_id' => $distrito,
                    'direccion1' => $direccion1,
                    'referencia' => $referencia,
                    'titulo_direccion' => 'Direccion de empresa: '. Auth::id(),
                ]
            );
            DB::table('legal_persons')
                ->where('user_id', Auth::id())
                ->update([
                    'banco_id' => $banco_id,
                    'direccion_id' => $direccion->id,
                    'nombre' => $nombre,
                    'razon_social' => $razon_social,
                    'ruc' => $ruc,
                    'numero_cuenta' => $numero_cuenta,
                    'telefono' => $telefono,
                    'email' => $email
                ]);
        });
    }

    public function password ()
    {
        return view('perfil.contraseña');
    }

    public function change (Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::where('id', $user->id)->first();
        $user->password = Hash::make($request->input('password'));
        $user->update();

        return $this->show();
    }

    public function setAvatar()
    {
        return view('perfil.avatar');
    }

    public function saveAvatar (Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);

        $user = User::where('id', Auth::id())->first();

        $avatar = $request->file('avatar');
        $imagen = $user->name . '_' . $avatar->getClientOriginalName();
        Storage::disk('s3')->put('avatar/' . $imagen, File::get($avatar));
        $user->avatar = $imagen;

        $user->update();

        return $this->show();
    }
}
