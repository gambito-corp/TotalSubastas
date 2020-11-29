<?php

namespace App\Http\Controllers\admin\producto;


use App\Company;
use App\Country;
use App\Helpers\Gambito;
use App\Http\Controllers\Controller;
use App\LegalPerson;
use App\Lot;
use Illuminate\Http\Request;
use App\Producto as Data;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Empresa','Lote', 'Usuario')->get();
        $ciudad = Country::where('descripcion', 'distrito')->get(['id', 'nombre']);
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::with('Empresa','Lote', 'Usuario')->where('empresa_id', $company->id)->get();
//                dd($data);
            }
        }
        return view('admin.producto.view', compact('data', 'ciudad'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Empresa','Lote', 'Usuario')->get();
        $ciudad = Country::where('descripcion', 'distrito')->get(['id', 'nombre']);
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::onlyTrashed()->with('Empresa')->where('empresa_id', $company->id)->get();
            }
        }
        $trash = true;
        return view('admin.producto.view', compact('data', 'trash', 'ciudad'));
    }

    public function create()
    {
        $data = new Data();
        $empresas = Company::all();
        $lotes = Lot::all();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first()->id;

            $empresa = Company::where('id', $juridica)->first()->id;

            $lotes = Lot::where('empresa_id', $empresa)->get();

        }
        $ciudad = Country::where('descripcion', 'provincia')->get();
        $empresa = null;
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('id', Auth::id())->first()->id;
            $empresa = Company::where('id', $juridica)->first()->id;
        }
        return view('admin.producto.form', compact('data', 'empresas', 'lotes', 'ciudad', 'empresa'));
    }

    public function store(Request $request)
    {
//        dd($request->input());
        $this->validate($request,[
            'empresa_id'        => 'required',
            'lote_id'           => 'required',
            'ciudad'            => 'required',
            'tipo_vehiculo'     => 'required',

            'tipo_subasta'      => 'required',
            'tipo_reserva'      => 'required',

            'nombre'            => 'required',
            'imagen'            => 'image',
            'precio'            => 'required',
            'precio_reserva'    => 'required',
            'garantia'          => 'required',
            'puja'              => 'required',
            'comision'          => 'required|integer',
            'started_at'        => 'required',
            'finalized_at'      => 'required'
        ]);

        $empresa_id = $request->input('empresa_id');
        $lote_id = $request->input('lote_id');
        $ciudad = $request->input('ciudad');
        $tipo_vehiculo = $request->input('tipo_vehiculo');
        $tipo_subasta = $request->input('tipo_subasta');
        $tipo_reserva = $request->input('tipo_reserva');
        $nombre = $request->input('nombre');
        $imagen = $request->file('imagen');
        $precio = $request->input('precio');
        $precio_reserva = $request->input('precio_reserva');
        $garantia = $request->input('garantia');
        $puja = $request->input('puja');
        $comision = $request->input('comision');
        $started_at = $request->input('started_at');
        $finalized_at = $request->input('finalized_at');

        $dato = Company::with('Juridica')->where('id', $empresa_id)->first();

        $producto = new Data();
        $producto->propietario = $dato->Juridica->Usuario->id;
        $producto->user_id = Auth::id();
        $producto->empresa_id = $empresa_id;
        $producto->lote_id = $lote_id;
        $producto->ciudad = $ciudad;
        $producto->tipo_vehiculo = $tipo_vehiculo;
        $producto->tipo_subasta = $tipo_subasta;
        $producto->tipo_reserva = $tipo_reserva;
        $producto->nombre = $nombre;
        $producto->precio = $precio;
        $producto->precio_reserva = $precio_reserva;
        $producto->garantia = $garantia;
        $producto->puja = $puja;
        $producto->comision = $comision;
        $producto->started_at = $started_at;
        $producto->finalized_at = $finalized_at;

        //subir imagen a storage
        if($imagen){
            $id=1;
            if(Data::all()->last() != null) {
                $id = Data::all()->last()->id + 1;
            }
            $imagen_name = $id.'.jpg';
            $file = Image::make($imagen)
                ->resize('200', '180')
                ->encode('jpg', 90);
            $file->save(Storage::disk('s3')->put('producto/'.$imagen_name, $file));
            $producto->imagen = $imagen_name;
        }

        $producto->save();

        return redirect()->route('admin.producto.index')->with([
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
        $empresa = null;
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first()->id;

            $empresa = Company::where('id', $juridica)->first()->id;

            $lotes = Lot::where('empresa_id', $empresa)->get();
        }

        $data = Data::where('id', $id)->first();
        $empresas = Company::all();
        $lotes = Lot::all();
        $ciudad = Country::where('descripcion', 'provincia')->get();
        return view('admin.producto.form', compact('data', 'empresas', 'lotes', 'ciudad', 'empresa'));
    }

    public function update($id, Request $request)
    {

        $this->validate($request,[
            'lote_id'           => 'required',
            'ciudad'            => 'required',
            'tipo_vehiculo'     => 'required',
            'tipo_subasta'      => 'required',
            'tipo_reserva'      => 'required',
            'nombre'            => 'required',
            'imagen'            => 'image',
            'precio'            => 'required',
            'precio_reserva'    => 'required',
            'garantia'          => 'required',
            'puja'              => 'required',
            'comision'          => 'required|integer',
        ]);

        $lote_id = $request->input('lote_id');
        $ciudad = $request->input('ciudad');
        $tipo_vehiculo = $request->input('tipo_vehiculo');
        $tipo_subasta = $request->input('tipo_subasta');
        $tipo_reserva = $request->input('tipo_reserva');
        $nombre = $request->input('nombre');
        $imagen = $request->file('imagen');
        $precio = $request->input('precio');
        $precio_reserva = $request->input('precio_reserva');
        $garantia = $request->input('garantia');
        $puja = $request->input('puja');
        $comision = $request->input('comision');
        $started_at = $request->input('started_at');
        $finalized_at = $request->input('finalized_at');

        $producto = Data::where('id', $id)->first();
        if ($lote_id != null){
            $producto->lote_id = $lote_id;
        }
        if ($ciudad != null){
            $producto->ciudad = $ciudad;
        }
        if ($tipo_vehiculo != null){
            $producto->tipo_vehiculo = $tipo_vehiculo;
        }
        if ($tipo_subasta != null){
            $producto->tipo_subasta = $tipo_subasta;
        }
        if ($tipo_reserva != null){
            $producto->tipo_reserva = $tipo_reserva;
        }
        if ($nombre != null){
            $producto->nombre = $nombre;
        }
        if ($precio != null){
            $producto->precio = $precio;
        }
        if ($precio_reserva != null){
            $producto->precio_reserva = $precio_reserva;
        }
        if ($garantia != null){
            $producto->garantia = $garantia;
        }
        if ($puja != null){
            $producto->puja = $puja;
        }
        if ($comision != null){
            $producto->comision = $comision;
        }

        if($started_at != null){
            $producto->started_at = $started_at;
        }
        if($finalized_at != null){
            $producto->finalized_at = $finalized_at;
        }

        //subir imagen a storage
        if($imagen){
            $imagen_name = $producto->id.'.jpg';
            $file = Image::make($imagen)
                ->resize('200', '180')
                ->encode('jpg', 90);
            $file->save(Storage::disk('s3')->put('producto/'.$imagen_name, $file));
            $producto->imagen = $imagen_name;
        }

        $producto->update();

        return redirect()->route('admin.producto.index')->with([
            'message' => 'El Rol Fue Creado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('admin.producto.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        $data = Data::withTrashed()
            ->where('id', $id)
            ->first();
        if (Auth::user()->isAdmin() || Auth::id() == $data->user_id){
            $this->destroyImagen($data->imagen);
        }

        $data->forceDelete();
        return redirect()->route('admin.producto.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.producto.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }

    public function getImagen($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()->isAdmin() || Auth::id() == $id){
            $data = Data::withTrashed()->where('id', $id)->first();
            $file = Storage::disk('s3')->get('producto/'.$data->imagen);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('producto/ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    protected function destroyImagen($file)
    {
        Storage::disk('s3')->delete('producto/'.$file);
    }
}
