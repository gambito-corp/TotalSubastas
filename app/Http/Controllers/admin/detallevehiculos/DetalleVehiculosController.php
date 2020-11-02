<?php

namespace App\Http\Controllers\admin\detallevehiculos;

use App\Http\Controllers\Controller;
use App\LegalPerson;
use Illuminate\Http\Request;
use App\VehicleDetail as Data;
use App\Company;
use App\Lot;
use App\Producto;
use App\Brand;
use Illuminate\Support\Facades\Auth;


class DetalleVehiculosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Empresa', 'Lote', 'Producto', 'Marca', 'Modelo')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::with('Empresa', 'Lote', 'Producto', 'Marca', 'Modelo')->where('empresa_id', $company->id)->get();
            }
        }
        return view('admin.detallesvehiculos.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Empresa', 'Lote', 'Producto', 'Marca', 'Modelo')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::onlyTrashed()->with('Empresa', 'Lote', 'Producto', 'Marca', 'Modelo')->where('empresa_id', $company->id)->get();
            }
        }
        $trash = true;
        return view('admin.detallesvehiculos.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        $empresas = Company::all();
        $lotes = Lot::all();
        $productos = Producto::all();
        $marcas = Brand::where('parent_id', null)->get();
        $modelos = Brand::where('parent_id', '!=', null)->get();
        $vista = 'create';
        return view('admin.detallesvehiculos.form', compact('data', 'empresas', 'lotes', 'productos', 'marcas', 'modelos', 'vista'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "video_url"             => 'nullable|active_url',
            "saneado"               => "nullable|accepted",
            "captura"               => "nullable|accepted",
            "seguro"                => "nullable|accepted",
            "soat"                  => "nullable|accepted",
            "rtv"                   => "nullable|accepted",
            "freno_delantero"       => "nullable|accepted",
            "freno_trasero"         => "nullable|accepted",
            "am_fm"                 => "nullable|accepted",
            "cd"                    => "nullable|accepted",
            "sd"                    => "nullable|accepted",
            "aux"                   => "nullable|accepted",
            "usb"                   => "nullable|accepted",
            "bluetooth"             => "nullable|accepted",
            "airbag"                => "nullable|accepted",
            "alarma"                => "nullable|accepted",
            "neblineros"            => "nullable|accepted",
            "lunas"                 => "nullable|accepted",
            "gps"                   => "nullable|accepted",
            "sensores"              => "nullable|accepted",
            "empresa_id"            => "required|integer",
            "lote_id"               => "required|integer",
            "producto_id"           => "required|integer",
            "marca_id"              => "required|integer",
            "modelo_id"             => "required|integer",
            "year"                  => 'nullable|integer',
            "placa"                 => 'nullable|string',
            "color"                 => 'nullable|string',
            "version"               => 'nullable|string',
            "ubicacion"             => 'nullable|string',
            "timon"                 => 'nullable|string',
            "asientos"              => 'nullable|string',
            "estado_vehiculo"       => 'nullable|string',
            "informacion"           => 'nullable|string',
            "valor_interno_activo"  => 'nullable|string',
            "terminos"              => 'nullable|string',
            "combustible"           => 'nullable|string',
            "traccion"              => 'nullable|string',
            "torque"                => 'nullable|string',
            "potencia"              => 'nullable|string',
            "cilindrada"            => 'nullable|string',
            "velocidades"           => 'nullable|string',
            "trasmision"            => 'nullable|string',
            "puertas"               => 'nullable|string',
            "tipo_freno"            => 'nullable|string',
            "neumaticos"            => 'nullable|string',
            "tapizado"              => 'nullable|string',
            "aros"                  => 'nullable|string',
            "kilometraje"           => 'nullable|string',
        ]);
        Data::create($request->all());
        return redirect()->route('admin.detallevehiculos.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Data::where('id', $id)->first();
        $empresas = Company::all();
        $lotes = Lot::all();
        $productos = Producto::all();
        $marcas = Brand::where('parent_id', null)->get();
        $modelos = Brand::where('parent_id', '!=', null)->get();
        $vista = 'create';
        return view('admin.detallesvehiculos.form', compact('data', 'empresas', 'lotes', 'productos', 'marcas', 'modelos', 'vista'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            "video_url"             => 'nullable|active_url',
            "saneado"               => "nullable|accepted",
            "captura"               => "nullable|accepted",
            "seguro"                => "nullable|accepted",
            "soat"                  => "nullable|accepted",
            "rtv"                   => "nullable|accepted",
            "freno_delantero"       => "nullable|accepted",
            "freno_trasero"         => "nullable|accepted",
            "am_fm"                 => "nullable|accepted",
            "cd"                    => "nullable|accepted",
            "sd"                    => "nullable|accepted",
            "aux"                   => "nullable|accepted",
            "usb"                   => "nullable|accepted",
            "bluetooth"             => "nullable|accepted",
            "airbag"                => "nullable|accepted",
            "alarma"                => "nullable|accepted",
            "neblineros"            => "nullable|accepted",
            "lunas"                 => "nullable|accepted",
            "gps"                   => "nullable|accepted",
            "sensores"              => "nullable|accepted",
            "marca_id"              => "required|integer",
            "modelo_id"             => "required|integer",
            "year"                  => 'nullable|integer',
            "placa"                 => 'nullable|string',
            "color"                 => 'nullable|string',
            "version"               => 'nullable|string',
            "ubicacion"             => 'nullable|string',
            "timon"                 => 'nullable|string',
            "asientos"              => 'nullable|string',
            "estado_vehiculo"       => 'nullable|string',
            "informacion"           => 'nullable|string',
            "valor_interno_activo"  => 'nullable|string',
            "terminos"              => 'nullable|string',
            "combustible"           => 'nullable|string',
            "traccion"              => 'nullable|string',
            "torque"                => 'nullable|string',
            "potencia"              => 'nullable|string',
            "cilindrada"            => 'nullable|string',
            "velocidades"           => 'nullable|string',
            "trasmision"            => 'nullable|string',
            "puertas"               => 'nullable|string',
            "tipo_freno"            => 'nullable|string',
            "neumaticos"            => 'nullable|string',
            "tapizado"              => 'nullable|string',
            "aros"                  => 'nullable|string',
            "kilometraje"           => 'nullable|string',
        ]);

        Data::where('id', $id)->update([
            "video_url"             =>$request->input('video_url'),
            "saneado"               =>$request->input('saneado'),
            "captura"               =>$request->input('captura'),
            "seguro"                =>$request->input('seguro'),
            "soat"                  =>$request->input('soat'),
            "rtv"                   =>$request->input('rtv'),
            "freno_delantero"       =>$request->input('freno_delantero'),
            "freno_trasero"         =>$request->input('freno_trasero'),
            "am_fm"                 =>$request->input('am_fm'),
            "cd"                    =>$request->input('cd'),
            "sd"                    =>$request->input('sd'),
            "aux"                   =>$request->input('aux'),
            "usb"                   =>$request->input('usb'),
            "bluetooth"             =>$request->input('bluetooth'),
            "airbag"                =>$request->input('airbag'),
            "alarma"                =>$request->input('alarma'),
            "neblineros"            =>$request->input('neblineros'),
            "lunas"                 =>$request->input('lunas'),
            "gps"                   =>$request->input('gps'),
            "sensores"              =>$request->input('sensores'),
            "marca_id"              =>$request->input('marca_id'),
            "modelo_id"             =>$request->input('modelo_id'),
            "year"                  =>$request->input('year'),
            "placa"                 =>$request->input('placa'),
            "color"                 =>$request->input('color'),
            "version"               =>$request->input('version'),
            "ubicacion"             =>$request->input('ubicacion'),
            "timon"                 =>$request->input('timon'),
            "asientos"              =>$request->input('asientos'),
            "estado_vehiculo"       =>$request->input('estado_vehiculo'),
            "informacion"           =>$request->input('informacion'),
            "valor_interno_activo"  =>$request->input('valor_interno_activo'),
            "terminos"              =>$request->input('terminos'),
            "combustible"           =>$request->input('combustible'),
            "traccion"              =>$request->input('traccion'),
            "torque"                =>$request->input('torque'),
            "potencia"              =>$request->input('potencia'),
            "cilindrada"            =>$request->input('cilindrada'),
            "velocidades"           =>$request->input('velocidades'),
            "trasmision"            =>$request->input('trasmision'),
            "puertas"               =>$request->input('puertas'),
            "tipo_freno"            =>$request->input('tipo_freno'),
            "neumaticos"            =>$request->input('neumaticos'),
            "tapizado"              =>$request->input('tapizado'),
            "aros"                  =>$request->input('aros'),
            "kilometraje"           =>$request->input('kilometraje'),
        ]);

        return redirect()->route('admin.detallevehiculos.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('admin.detallevehiculos.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->first()
            ->forceDelete();
        return redirect()->route('admin.detallevehiculos.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.detallevehiculos.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
