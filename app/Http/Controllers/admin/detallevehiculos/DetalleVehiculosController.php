<?php

namespace App\Http\Controllers\admin\detallevehiculos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetalleVehiculosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
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
}
