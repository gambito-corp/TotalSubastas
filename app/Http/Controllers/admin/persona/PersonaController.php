<?php

namespace App\Http\Controllers\admin\persona;

use App\Http\Controllers\Controller;
use App\Person as Data;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Data::with('Usuario', 'Direccion', 'Banco')->get();
        return view('admin.persona.view', compact('data', 'restante'));
    }

    public function trash()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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

    public function getImagen()
    {

    }

    public function getImagen2()
    {

    }
}
