<?php

namespace App\Http\Controllers\admin\imagenesproducto;

use App\Company;
use App\Helpers\Gambito;
use App\Http\Controllers\Controller;
use App\ImagenesVehiculo as Data;
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
        return view('admin.imagenproducto.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Empresa', 'Lote', 'Producto')->get();
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
            $Imagenes->titulo = $titulo;
            $Imagenes->descripcion = $descripcion;
            if($imagen){
                $id = Data::all()->last()->id+1;
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
