<?php

namespace App\Http\Controllers;


use App\Avatar;
use App\helpers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function index()
    {
        $datos = Avatar::all();
        return view('BackOffice.Avatar.tabla', compact('datos'));
    }

    public function trash()
    {
        $datos = Avatar::onlyTrashed()->get();
        return view('BackOffice.Avatar.tabla', compact('datos'));
    }

    public function create()
    {
        $data = new Avatar();
        return view('BackOffice.Avatar.formulario', compact('data'));
    }

    public function store(Request $request)
    {
        Avatar::create($request->validated());
        return redirect()->route('Avatar.index')->with([
            'flash' => 'Avatar Creado, Si necesitas puedes Modificarlo',
            'class' => 'clase'
        ]);
    }

    public function show($avatar)
    {
        $data = Avatar::get()->where('slug', $avatar)->first();
        return view('backOffice.Avatar.simple', compact('data'));
    }

    public function edit($avatar)
    {
        $data = Avatar::get()->where('slug', $avatar)->first();
        return view('BackOffice.Avatar.formulario', compact('data'));
    }

    public function update(Request $request, Avatar $avatar)
    {
        $avatar->update($request->validated());
        return redirect()->route('Avatar.index')->with([
            'flash' => 'Avatar Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(Avatar $avatar)
    {
        $avatar->delete();
        return redirect()->route('Avatar.index')->with([
            'flash' => 'Avatar Dado de baja Este Avatar Ya no se Podra Usar mas',
            'class' => 'info'
        ]);
    }

    public function restore($id)
    {
        Avatar::onlyTrashed($id)->where('slug', $id)->first()->restore();
        return redirect()->route('Avatar.index')->with([
            'flash' => 'Avatar Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($avatar)
    {
        Avatar::onlyTrashed($avatar)->first()->forceDelete();
        return redirect()->route('Avatar.trash')->with([
            'flash' => 'Avatar Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'danger'
        ]);
    }

}
