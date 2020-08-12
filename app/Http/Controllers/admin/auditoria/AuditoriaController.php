<?php

namespace App\Http\Controllers\admin\auditoria;

use App\Audit as Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuditoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Usuario')->get();
        return view('admin.auditoria.view', compact('data'));
    }

    public function trash()
    {
        $data = Data::onlyTrashed()->with('Usuario')->get();
        $trash = true;
        return view('admin.auditoria.view', compact('data', 'trash'));
    }

    public function show($id)
    {
        dd('mostrar el show de auditoria', $id);
    }

    public function delete($id)
    {
        Data::where('id',$id)->firstOrFail()->delete();
        return redirect()->route('admin.auditoria.index')->with([
            'message' => 'El Rol Fue Borrado de la Base de Datos',
            'alerta' => 'warning'
        ]);
    }

    public function destroy($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->forceDelete();
        return redirect()->route('admin.auditoria.trash')->with([
            'message' => 'El Rol Fue Eliminado Definitivamente de la Base de Datos',
            'alerta' => 'danger'
        ]);
    }

    public function restore($id)
    {
        Data::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect()->route('admin.auditoria.trash')->with([
            'message' => 'El Rol Fue Restaurado Correctamente',
            'alerta' => 'warning'
        ]);
    }
}
