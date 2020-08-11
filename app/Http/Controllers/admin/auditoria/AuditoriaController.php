<?php

namespace App\Http\Controllers\admin\auditoria;

use App\Audit;
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
