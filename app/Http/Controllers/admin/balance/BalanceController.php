<?php

namespace App\Http\Controllers\admin\balance;

use App\Bank;
use App\Helpers\Gambito;
use App\User;
use App\Balance as Data;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BalanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Usuario', 'Banco')->get();
        return view('admin.balance.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Usuario', 'Banco')->get();
        $trash = true;
        return view('admin.balance.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        $bancos = Bank::all();
        $usuarios = User::doesntHave('Balance')->get();
        return view('admin.balance.form', compact('data', 'bancos', 'usuarios'));
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request,[
            'user'          => 'required',
            'banco'         => 'required',
            'monto'         => 'required',
            'tipo'          => 'required',
            'descripcion'   => 'required',
            'motivo'        => 'required',
            'cuenta'        => 'required',
            'transaccion'   => 'required',
            'abono_at'      => 'required',
            'boucher'       => 'required|image',
        ]);

        //Recoger Datos
        $user = $request->input('user');
        $banco = $request->input('banco');
        $monto = $request->input('monto');
        $tipo = $request->input('tipo');
        $descripcion = $request->input('descripcion');
        $motivo = $request->input('motivo');
        $cuenta = $request->input('cuenta');
        $transaccion = $request->input('transaccion');
        $abono_at = $request->input('abono_at');
        $boucher = $request->file('boucher');

        //asignar valores

        $balance = new Data();
        $balance->user_id = $user;
        $balance->banco_id = $banco;
        $balance->monto = $monto;
        $balance->tipo = $tipo;
        $balance->descripcion = $descripcion;
        $balance->motivo = $motivo;
        $balance->cuenta = $cuenta;
        $balance->transaccion_banco = $transaccion;
        $balance->abono_at = $abono_at;
        $balance->load('Usuario');

        //subir imagen a storage
        if($boucher){
            $imagen = $balance->Usuario->name.'_'.$boucher->getClientOriginalName();
            Storage::disk('boucher')->put($imagen, File::get($boucher));
            $balance->boucher = $imagen;
        }
        $balance->save();
        return redirect()->route('admin.balance.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        dd('mostrar el show de balance', $id);
    }

    public function edit($id)
    {
        $data = Data::where('id', $id)->firstOrFail();
        $bancos = Bank::all();
        return view('admin.balance.form', compact('data', 'bancos'));
    }

    public function update($id, Request $request)
    {
        $validate = $this->validate($request,[
            'boucher'       => 'image',
        ]);

        $boucher = $request->file('boucher');

        //asignar valores

        $balance = Data::with('Usuario')->where('id', $id)->first();
        $balance->banco_id = ((!empty($request->input('banco')) && ($request->input('banco') == $balance->banco_id))) ? $balance->banco_id : $request->input('banco');
        $balance->monto = ((!empty($request->input('monto')) && ($request->input('monto') == $balance->monto))) ? $balance->monto : $request->input('monto');
        $balance->tipo = ((!empty($request->input('tipo')) && ($request->input('tipo') == $balance->tipo))) ? $balance->tipo : $request->input('tipo');
        $balance->descripcion = ((!empty($request->input('descripcion')) && ($request->input('descripcion') == $balance->descripcion))) ? $balance->descripcion : $request->input('descripcion');
        $balance->motivo = ((!empty($request->input('motivo')) && ($request->input('motivo') == $balance->motivo))) ? $balance->motivo : $request->input('motivo');
        $balance->cuenta = ((!empty($request->input('cuenta')) && ($request->input('cuenta') == $balance->cuenta))) ? $balance->cuenta : $request->input('cuenta');
        $balance->transaccion_banco = ((!empty($request->input('transaccion')) && ($request->input('transaccion') == $balance->transaccion_banco))) ? $balance->transaccion_banco : $request->input('transaccion');
        if ($request->input('abono_at')){
            $balance->abono_at = ((!empty($request->input('abono_at')) && ($request->input('abono_at') == $balance->abono_at))) ? $balance->abono_at : $request->input('abono_at');
        }
        //subir imagen a storage
        if($boucher){
            $imagen = $balance->Usuario->name.'_'.$boucher->getClientOriginalName();
            Storage::disk('s3')->put($imagen, File::get($boucher));
            $balance->boucher = ($imagen == $balance->boucher) ? $balance->boucher : $imagen;
        }
        $balance->update();
        return redirect()->route('admin.balance.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('admin.balance.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.balance.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.balance.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }

    public function getImagen($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()->isAdmin() || Auth::id() == $id){
            $data = Data::where('id', $id)->first();
            $file = Storage::disk('boucher')->get($data->boucher);
            $code = 200;
        }else{
            $file = Storage::disk('boucher')->get('ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }
}
