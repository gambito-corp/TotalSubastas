<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol as Role;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.view', compact('roles'));
    }

    public function create()
    {
        dd('creado');
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function show(Role $rol)
    {
        dd($rol);
    }

    public function edit(Role $rol)
    {
        dd($rol);
    }

    public function update(Role $rol, Request $request)
    {

    }

    public function delete(Role $rol)
    {
        dd($rol);
    }

    public function destroy(Role $rol)
    {
        dd($rol);
    }

    public function restore(Role $rol)
    {
        dd($rol);
    }


}
