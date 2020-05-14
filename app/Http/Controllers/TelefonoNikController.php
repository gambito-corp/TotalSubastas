<?php

namespace App\Http\Controllers;


use App\TelefonoNik;
use App\helpers;
use App\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class TelefonoNikController extends Controller
{
    public function index()
    {
        $datos = Rol::all();
        return view('BackOffice.TelefonoNik.tabla', compact('datos'));
    }

    public function trash()
    {
        $datos = TelefonoNik::onlyTrashed()->get();
        return view('BackOffice.TelefonoNik.tabla', compact('datos'));
    }

    public function create()
    {
        $data = new TelefonoNik();
        return view('BackOffice.TelefonoNik.formulario', compact('data'));
    }

    public function store(Request $request)
    {
        TelefonoNik::create($request->validated());
        return redirect()->route('TelefonoNik.index')->with([
            'flash' => 'TelefonoNik Creado, Si necesitas puedes Modificarlo',
            'class' => 'success'
        ]);
    }

    public function show($telefonoNik)
    {
        $data = TelefonoNik::get()->where('slug', $telefonoNik)->first();
        return view('backOffice.TelefonoNik.simple', compact('data'));
    }

    public function edit($telefonoNik)
    {
        $data = TelefonoNik::get()->where('slug', $telefonoNik)->first();
        return view('BackOffice.{{ modelo }}.formulario', compact('data'));
    }

    public function update(Request $request, TelefonoNik $telefonoNik)
    {
        $telefonoNik->update($request->validated());
        return redirect()->route('TelefonoNik.index')->with([
            'flash' => 'TelefonoNik Modificado con exito',
            'class' => 'info'
        ]);
    }

    public function delete(TelefonoNik $telefonoNik)
    {
        $telefonoNik->delete();
        return redirect()->route('TelefonoNik.index')->with([
            'flash' => 'TelefonoNik Dado de baja Este TelefonoNik Ya no se Podra Usar mas',
            'class' => 'info'
        ]);
    }

    public function restore($id)
    {
        TelefonoNik::onlyTrashed($id)->where('slug', $id)->first()->restore();
        return redirect()->route('TelefonoNik.index')->with([
            'flash' => 'TelefonoNik Dado de Alta, Si necesitas puedes Modificarlo',
            'class' => 'info'
        ]);
    }

    public function destroy($telefonoNik)
    {
        TelefonoNik::onlyTrashed($telefonoNik)->first()->forceDelete();
        return redirect()->route('TelefonoNik.trash')->with([
            'flash' => 'TelefonoNik Eliminado definitivamente, ya no existe mas y sus dependencias fueron eliminadas',
            'class' => 'danger'
        ]);
    }

}
