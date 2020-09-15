<?php

namespace App\Http\Controllers;

use App\Address;
use App\Audit;
use App\Balance;
use App\Bank;
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
    public function confirm(Request $request){
        $user = User::where('id',Gambito::hash($request->input('user'),true))->first();
        auth()->loginUsingId($user->id);
        if($user->email_verified_at == null){
            $user->email_verified_at = now();
            $user->update();
        }
        $data = ($user->tipo == 'natural') ? Person::where('user_id',  $user->id)->first() : LegalPerson::where('user_id', $user->id)->first();
        $bancos = Bank::all('id', 'siglas');
        return view('perfil.profile-edit', compact('data', 'bancos'));
    }

    public function show ()
    {
        $id = Auth::id();
        $persona = Person::where('user_id', $id)->first();
        $audit = Audit::where('user_id', $id)->get()->pluck('created_at')->last()->format('d-M-Y');
        $balance = Balance::where('user_id', $id)->pluck('monto')->first();
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
        $garantiaDetail = Balance::where('user_id', $id)->get();
        return view('perfil.account', compact('persona', 'audit', 'balance', 'garantia', 'likes', 'ofertas', 'participacion', 'activas', 'pasadas', 'ganando','ganadas', 'garantiaDetail'));
    }

    public function edit ()
    {
        $data = (Auth::user()->tipo == 'natural') ? Person::where('user_id',  Auth::id())->first() : LegalPerson::where('user_id', Auth::id())->first();
        $bancos = Bank::all('id', 'siglas');

        return view('perfil.profile-edit', compact('data', 'bancos'));
    }

    public function update(Request $request)
    {
        $request->validate([
            "nombres"           => "required|string",
            "apellidos"         => "required|string",
            "telefono"          => "required",
            "email"             => "required|email",
            "d_day"             => "required|date",
            "tipo_documento"    => "required",
            "numero_documento"  => "required",
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
            "banco_id"          => "required",
            "numero_cuenta"     => "required",
            "genero"            => "required",
            "estado_civil"      => "required",
            "digito_documento"  => "required",
            "dni_front"         => "required|image",
            "dni_back"          => "required|image",
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

        if($dni_front){
            $dni_front_name = 'delante'.$dni_front->getClientOriginalName();
            Storage::disk('s3')->put('dni/'.Auth::user()->name.'/'.$dni_front_name, File::get($dni_front));
        }
        if($dni_back){
            $dni_back_name = 'detras'.$dni_back->getClientOriginalName();
            Storage::disk('s3')->put('dni/'.Auth::user()->name.'/'.$dni_back_name, File::get($dni_back));
        }

        $test = DB::transaction(function()use(
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
        ){
            $user = DB::table('users')
                ->where('id', Auth::id())
                ->update([
                    'completo' => true,
                ]);
            if(Auth::user()->tipo == 'natural'){
                $direccion = Address::updateOrCreate(
                    [
                        'user_id' => Auth::id(),
                        'titulo_direccion' => $titulo_direccion,
                    ],
                    [
                        'user_id'           => Auth::id(),
                        'pais_id'           => $pais,
                        'departamento_id'   => $departamento,
                        'provincia_id'      => $provincia,
                        'distrito_id'       => $distrito,
                        'tipo_via'          => $tipo_via,
                        'direccion1'        => $direccion1,
                        'direccion2'        => $direccion2,
                        'numero'            => $numero,
                        'int_ext'           => $int_ext,
                        'referencia'        => $referencia,
                        'titulo_direccion'  => $titulo_direccion,
                    ]
                );

                DB::table('people')
                    ->where('user_id', Auth::id())
                    ->update([
                        'direccion_id'      => $direccion->id,
                        'banco_id'          => $banco_id,
                        'nombres'           => $nombres,
                        'apellidos'         => $apellidos,
                        'tipo_documento'    => $tipo_documento,
                        'numero_documento'  => $numero_documento,
                        'digito_documento'  => $digito_documento,
                        'genero'            => $genero,
                        'estado_civil'      => $estado_civil,
                        'cuenta_banco'      => $numero_cuenta,
                        'b_day'             => $d_day,
                        'telefono'          => $telefono,
                        'email'             => $email,
                        'dni_front'         => $dni_front_name,
                        'dni_back'          => $dni_back_name,
                    ]);
            }elseif(Auth::user()->tipo == 'juridica'){
                LegalPerson::create([
//                    'user_id'           => $user->id,
//                    'banco_id'          => $data['banco_id'],
//                    'nombre'            => $data['nombre'],
//                    'razon_social'      => $data['razon_social'],
//                    'ruc'               => $data['ruc'],
//                    'numero_cuenta'     => $data['numero_cuenta'],
//                    'telefono'          => $data['tel'],
//                    'email'             => $data['email']
                ]);
            }
        });
        return redirect()->route('index');
    }
}
