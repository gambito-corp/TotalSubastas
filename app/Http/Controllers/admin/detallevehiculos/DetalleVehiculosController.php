<?php

namespace App\Http\Controllers\admin\detallevehiculos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VehicleDetail as Data;
use App\Company;
use App\Lot;
use App\Producto;
use App\Brand;


class DetalleVehiculosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Empresa', 'Lote', 'Producto', 'Marca', 'Modelo')->get();
        return view('admin.detallesvehiculos.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Empresa', 'Lote', 'Producto', 'Marca', 'Modelo')->get();
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
        return view('admin.detallesvehiculos.form', compact('data', 'empresas', 'lotes', 'productos', 'marcas', 'modelos'));
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
        //
    }

    public function update($id, Request $request)
    {
        //
    }

    public function delete($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function restore($id)
    {
        //
    }
}
