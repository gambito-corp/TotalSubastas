<?php

namespace App\Http\Controllers;

use App\roles;
use App\helpers;
use App\Http\Requests\CreateRoleRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Modelo y Metodo de el controlador
        $data = roles::all();
        $clase = RendRol('rol.index');
        $user = Auth::user();

        return view('BackOffice.central', compact('data', 'clase', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clase = RendRol('rol.create');
        $user = Auth::user();
        $data = new roles();

        return view('BackOffice.central', compact('data', 'clase', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        dd('La cagaste se fue para aqui');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(roles $rol)
    {
        $clase = RendRol('rol.create');
        dd($clase);
        $user = Auth::user();

        return view('BackOffice.central', compact('clase', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(roles $rol)
    {
        $data = $rol;

        $clase = RendRol('rol.edit');

        $user = Auth::user();

        return view('BackOffice.central', compact('data', 'clase', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roles $rol)
    {
        dd('es aqui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function delete(roles $rol)
    {
        $data = $rol;
        $delete = $data->id->delete();
        if($delete){
            $ruta='rol.index';
            $msg ='Usuario Fue Dado de Baja';
            $class = 'success';
        }else{
            $ruta='rol.index';
            $msg ='Usuario No Fue Dado de Baja Porfavor Verifique sus errores';
            $class = 'danger';
        }
        return redirect()->route($ruta)->with(['msg'=> $msg, 'class' => $class]);
    }

    /**
     * Muestra la lista de recursos borrados.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function Trash()
    {

        $data = roles::onlyTrashed()->get();
        $clase = RendRol('rol.trash');
        $user = Auth::user();

        return view('BackOffice.central', compact('data', 'clase', 'user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(roles $roles)
    {
        $data = $rol;
        $data = roles::onlyTrashed()->find($data->id);
        $destroy = $data->forceDelete();
        if($destroy){
            $ruta='rol.trash';
            $msg ='Usuario Fue Eliminado';
            $class = 'success';
        }else{
            $ruta='rol.trash';
            $msg ='Usuario No Fue Eliminado Porfavor Verifique sus errores';
            $class = 'danger';
        }
        return redirect()->route($ruta)->with(['msg'=> $msg, 'class' => $class]);
    }

    /**
     * Restaura al recurso especifico en la Base de Datos y/o el Storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore(roles $roles)
    {
        $data = $rol;
        $data = roles::onlyTrashed()->find($data->id);
        $restore = $data->restore();
        if($restore){
            $ruta='rol.trash';
            $msg ='Usuario Fue Restaurado';
            $class = 'success';
        }else{
            $ruta='rol.trash';
            $msg ='Usuario No Fue Restaurado Porfavor Verifique sus errores';
            $class = 'danger';
        }
        return redirect()->route($ruta)->with(['msg'=> $msg, 'class' => $class]);
    }

    /**
     * Ruta para la visualizacion de imagen desde el Storage.
     *
     * @param  $filename
     * @return \Illuminate\Http\Response
     */
    public function getImagen($filename)
    {
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }
}
