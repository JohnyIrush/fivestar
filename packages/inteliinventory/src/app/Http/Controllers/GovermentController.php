<?php

namespace App\Http\Controllers;

use App\Models\Goverment;
use App\Http\Requests\StoreGovermentRequest;
use App\Http\Requests\UpdateGovermentRequest;

class GovermentController extends Controller
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
     * @param  \App\Http\Requests\StoreGovermentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGovermentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Goverment  $goverment
     * @return \Illuminate\Http\Response
     */
    public function show(Goverment $goverment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Goverment  $goverment
     * @return \Illuminate\Http\Response
     */
    public function edit(Goverment $goverment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGovermentRequest  $request
     * @param  \App\Models\Goverment  $goverment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGovermentRequest $request, Goverment $goverment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Goverment  $goverment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goverment $goverment)
    {
        //
    }
}
