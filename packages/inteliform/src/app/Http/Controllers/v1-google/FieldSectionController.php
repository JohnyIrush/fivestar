<?php

namespace App\Http\Controllers;

use App\Models\FieldSection;
use App\Http\Requests\StoreFieldSectionRequest;
use App\Http\Requests\UpdateFieldSectionRequest;

class FieldSectionController extends Controller
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
     * @param  \App\Http\Requests\StoreFieldSectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldSectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Http\Response
     */
    public function show(FieldSection $fieldSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldSection $fieldSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldSectionRequest  $request
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldSectionRequest $request, FieldSection $fieldSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldSection  $fieldSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldSection $fieldSection)
    {
        //
    }
}
