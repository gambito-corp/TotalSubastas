<?php

namespace App\Http\Controllers;

use App\roles;
use App\helpers;
use App\Http\Requests\SaveRoleRequest;
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
        $this->authorize('create', new roles);
        $clase = RendRol('rol.create');
        $user = Auth::user();
        $data = new roles();
        $data2 = (array) json_decode(roles::findOrFail(1));
        return view('BackOffice.central', compact('data', 'data2', 'clase', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveRoleRequest $request)
    {
        roles::create($request->validated());
        return redirect()->route('rol.index')
        ->with([
            'msg' => 'Exito',
            'class' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show($rol)
    {
        $data = roles::withTrashed()->findOrFail($rol);
        $clase = RendRol('rol.show');
        $user = Auth::user();
        return view('BackOffice.central', compact('clase', 'data', 'user'));
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
    public function update(SaveRoleRequest $request, roles $rol)
    {
        roles::updated($request->validated());
        return redirect()->route('rol.index')
        ->with([
            'msg' => 'Exito',
            'class' => 'success'
        ]);
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
    public function delete(roles $rol)
    {
        $data = $rol;
        $delete = $data->delete();
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
     * Restaura al recurso especifico en la Base de Datos y/o el Storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($rol)
    {
        $rol = roles::withTrashed()->findOrFail($rol);
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
     * Remove the specified resource from storage.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy($rol)
    {
        $rol = roles::withTrashed()->findOrFail($rol);
        $data = $rol;
        $data = roles::onlyTrashed()->findOrFail($data->id);
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
     * Ruta para la visualizacion de imagen desde el Storage.
     *
     * @param  $filename
     * @return \Illuminate\Http\Response
     */
    public function getImagen($filename)
    {
        dd('llegue aqui metodo getimagen', $filename);
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }
}
