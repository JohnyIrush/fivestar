<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\MediaProperties;
use Softwarescares\Inteliform\app\Http\Requests\StoreMediaPropertiesRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateMediaPropertiesRequest;

class MediaPropertiesController extends Controller
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
     * @param  \App\Http\Requests\StoreMediaPropertiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaPropertiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaProperties  $mediaProperties
     * @return \Illuminate\Http\Response
     */
    public function show(MediaProperties $mediaProperties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaProperties  $mediaProperties
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaProperties $mediaProperties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaPropertiesRequest  $request
     * @param  \App\Models\MediaProperties  $mediaProperties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaPropertiesRequest $request, MediaProperties $mediaProperties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaProperties  $mediaProperties
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaProperties $mediaProperties)
    {
        //
    }
}
