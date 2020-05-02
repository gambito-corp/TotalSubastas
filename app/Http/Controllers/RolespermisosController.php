<?php

namespace App\Http\Controllers;

use App\rolespermisos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RolespermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = rolespermisos::all();
        return view('generic.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rolespermisos  $rolespermisos
     * @return \Illuminate\Http\Response
     */
    public function show(rolespermisos $rolespermisos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rolespermisos  $rolespermisos
     * @return \Illuminate\Http\Response
     */
    public function edit(rolespermisos $rolespermisos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rolespermisos  $rolespermisos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rolespermisos $rolespermisos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rolespermisos  $rolespermisos
     * @return \Illuminate\Http\Response
     */
    public function destroy(rolespermisos $rolespermisos)
    {
        //
    }
}
