<?php

namespace App\Http\Controllers;

use App\Models\Zipcode;
use App\Http\Requests\StoreZipcodeRequest;
use App\Http\Requests\UpdateZipcodeRequest;

class ZipcodeController extends Controller
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
     * @param  \App\Http\Requests\StoreZipcodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZipcodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function show(Zipcode $zipcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Zipcode $zipcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZipcodeRequest  $request
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZipcodeRequest $request, Zipcode $zipcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zipcode  $zipcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zipcode $zipcode)
    {
        //
    }
}
