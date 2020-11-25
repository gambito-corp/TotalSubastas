<?php

namespace App\Http\Controllers\admin\imagenesproducto;

use App\Company;
use App\Helpers\Gambito;
use App\Http\Controllers\Controller;
use App\ImagenesVehiculo as Data;
use App\LegalPerson;
use App\Lot;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImagenesProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Empresa', 'Lote', 'Producto')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::with('Empresa')->where('empresa_id', $company->id)->get();
            }
        }
        return view('admin.imagenproducto.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Empresa', 'Lote', 'Producto')->get();
        if (Auth::user()->onlyEmpresa()) {
            $juridica = LegalPerson::where('user_id', Auth::id())->first();
            $company = Company::where('persona_juridica_id', $juridica->id)->first();
            $data = [];
            if($company != null){
                $data = Data::onlyTrashed()->with('Empresa')->where('empresa_id', $company->id)->get();
            }
        }
        $trash = true;
        return view('admin.imagenproducto.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        $empresas = Company::all('id', 'nombre');
        $lotes = Lot::all('id', 'nombre', 'empresa_id');
        $productos = Producto::all('id', 'nombre', 'empresa_id', 'lote_id');
        return view('admin.imagenproducto.form', compact('data', 'empresas', 'lotes', 'productos'));
    }

    public function store(Request $request)
    {
        foreach ($request->file('imagen') as $key => $imagen){
            $this->validate($request, [
                'imagen.'.$key => 'image',
            ]);
        }
        $this->validate($request,[
            'empresa_id' => 'required',
            'lote_id' => 'required',
            'producto_id' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);

        $empresa_id = $request->input('empresa_id');
        $lote_id = $request->input('lote_id');
        $producto_id = $request->input('producto_id');
        $titulo = $request->input('titulo');
        $descripcion = $request->input('descripcion');

        foreach ($request->file('imagen') as $key => $imagen) {

            $Imagenes = new Data();
            $Imagenes->empresa_id = $empresa_id;
            $Imagenes->lote_id = $lote_id;
            $Imagenes->producto_id = $producto_id;
            $Imagenes->titulo = '$key+1 '.$titulo;
            $Imagenes->descripcion = '$key+1 '.$descripcion;
            if($imagen){
                $id=1;
                if(Data::all()->last() != null) {
                    $id = Data::all()->last()->id + 1;
                }
                $imagen_name = $id.'.jpg';
                $file = Image::make($imagen)
                    ->resize('400', '400')
                    ->encode('jpg', 90);
                $file->save(Storage::disk('s3')->put('producto/set/'.$imagen_name, $file));
                $Imagenes->imagen = $imagen_name;
            }

            $Imagenes->save();
        }
        return redirect()->route('admin.imagenesproducto.index')->with([
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
        $empresas = Company::all('id', 'nombre');
        $lotes = Lot::all('id', 'nombre', 'empresa_id');
        $productos = Producto::all('id', 'nombre', 'empresa_id', 'lote_id');
        $group = Data::where('producto_id', $data->producto_id)->get();
        return view('admin.imagenproducto.form', compact('data', 'empresas', 'lotes', 'productos', 'group'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'empresa_id' => 'required',
            'lote_id' => 'required',
            'producto_id' => 'required',
            'imagen' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);

        $empresa_id = $request->input('empresa_id');
        $lote_id = $request->input('lote_id');
        $producto_id = $request->input('producto_id');
        $imagen = $request->file('imagen');
        $titulo = $request->input('titulo');
        $descripcion = $request->input('descripcion');

        $Imagenes = Data::where('id', $id)->first();
        $Imagenes->empresa_id = $empresa_id;
        $Imagenes->lote_id = $lote_id;
        $Imagenes->producto_id = $producto_id;
        $Imagenes->titulo = $titulo;
        $Imagenes->descripcion = $descripcion;

        if($imagen){
            $imagen_name = $id.'.jpg';
            $file = Image::make($imagen)
                ->resize('400', '400')
                ->encode('jpg', 90);
            $file->save(Storage::disk('s3')->put('producto/set/'.$imagen_name, $file));
            $Imagenes->imagen = $imagen_name;
        }
        $Imagenes->update();

        return redirect()->route('admin.imagenesproducto.index')->with([
            'message' => 'El Rol Fue actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('admin.imagenesproducto.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        $data = Data::withTrashed()
            ->where('id', $id)
            ->first();
        if (Auth::user()->isAdmin()){
            $this->destroyImagen($data->imagen);
        }

        $data->forceDelete();
        return redirect()->route('admin.imagenesproducto.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.imagenesproducto.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }

    public function getImagen($id)
    {
        $id = Gambito::hash($id, true);
        $usuario = Data::with('Empresa')->where('id', $id)
            ->first()
            ->Empresa->load('Juridica')
            ->Juridica->load('Usuario')
            ->Usuario->id;
        if (Auth::user()->isAdmin() || Auth::id() == $usuario){
            $data = Data::withTrashed()->where('id', $id)->first();
            $file = Storage::disk('s3')->get('producto/set/'.$data->imagen);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('producto/ejemplo.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    protected function destroyImagen($file)
    {
        Storage::disk('s3')->delete('producto/set/'.$file);
    }
}
