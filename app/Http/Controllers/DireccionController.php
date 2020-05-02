<?php

namespace App\Http\Controllers;

use App\direccion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function show(direccion $direccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function edit(direccion $direccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, direccion $direccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(direccion $direccion)
    {
        //
    }
}
