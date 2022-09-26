<?php

namespace Softwarescares\Inteligoogle\app\Http\Controllers;

use Softwarescares\Inteligoogle\app\Models\Google;
use Softwarescares\Inteligoogle\app\Http\Requests\StoreGoogleRequest;
use Softwarescares\Inteligoogle\app\Http\Requests\UpdateGoogleRequest;


class GoogleController extends Controller
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
     * @param  \App\Http\Requests\StoreGoogleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoogleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function show(Google $google)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function edit(Google $google)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoogleRequest  $request
     * @param  \App\Models\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoogleRequest $request, Google $google)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function destroy(Google $google)
    {
        //
    }
}
