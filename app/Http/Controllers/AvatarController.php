<?php

namespace App\Http\Controllers;

use App\avatar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AvatarController extends Controller
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
     * @param  \App\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(avatar $avatar)
    {
        //
    }
}
