<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\MediaProperty;
use Softwarescares\Inteliform\app\Http\Requests\StoreMediaPropertyRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateMediaPropertyRequest;

class MediaPropertyController extends Controller
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
     * @param  \App\Http\Requests\StoreMediaPropertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaPropertyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaProperty  $mediaProperty
     * @return \Illuminate\Http\Response
     */
    public function show(MediaProperty $mediaProperty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaProperty  $mediaProperty
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaProperty $mediaProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaPropertyRequest  $request
     * @param  \App\Models\MediaProperty  $mediaProperty
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaPropertyRequest $request, MediaProperty $mediaProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaProperty  $mediaProperty
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaProperty $mediaProperty)
    {
        //
    }
}
