<?php

namespace App\Http\Controllers\admin\slide;

use App\Helpers\Gambito;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slide as Data;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::all();
        return view('admin.slide.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->get();
        $trash = true;
        return view('admin.slide.view', compact('data', 'trash'));
    }

    public function create()
    {
        $data = new Data();
        return view('admin.slide.form', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'ruta'       => 'required|image',
        ]);
        $ruta = $request->file('ruta');

        $slide = new Data();
//        StartError
        $slide->ruta = "x";
//        EndError
        $slide->activo = true;
        $slide->save();

        $imagen = $slide->id.'.'.$ruta->getClientOriginalExtension();

        Storage::disk('s3')->put('slide/'.$imagen, File::get($ruta));

        $slide->ruta = $imagen;
        if ($request->input('activo') == null){
        }elseif($request->input('activo') == 'false'){
            $slide->activo = false;
        }else{
            $slide->activo = true;
        }
        $slide->update();
        return redirect()->route('admin.slide.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Data::where('id', $id)->firstOrFail();
        return view('admin.slide.form', compact('data'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'ruta'       => 'required|image',
        ]);
        $ruta = $request->file('ruta');

        $slide = Data::where('id', $id)->first();

        $imagen = $slide->id.'.'.$ruta->getClientOriginalExtension();
        Storage::disk('s3')->put('slide/'.$imagen, File::get($ruta));
        $slide->ruta = $imagen;
        if ($request->input('activo') == null){
        }elseif($request->input('activo') == 'false'){
            $slide->activo = false;
        }else{
            $slide->activo = true;
        }
        $slide->update();
        return redirect()->route('admin.slide.index')->with([
            'message' => 'El Rol Fue Actualizado Con Exito',
            'alerta' => 'success'
        ]);
    }

    public function delete($id)
    {
        Data::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('admin.slide.index')->with([
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
            $this->destroyImagen($data->ruta);
        }

        $data->forceDelete();
        return redirect()->route('admin.slide.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.slide.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }

    public function getImagen($id)
    {
        $id = Gambito::hash($id, true);
        if (Auth::user()->isAdmin() || Auth::id() == $id){
            $data = Data::where('id', $id)->first();
            $file = Storage::disk('s3')->get('slide/'.$data->ruta);
            $code = 200;
        }else{
            $file = Storage::disk('s3')->get('slide/401.jpg');
            $code = 401;
        }
        return new Response($file,$code);
    }

    protected function destroyImagen($file)
    {
        Storage::disk('s3')->delete('slide/'.$file);
    }
}
