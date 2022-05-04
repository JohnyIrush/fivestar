<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers;

use Softwarescares\Inteliinstaller\app\Models\SchoolTypes;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreSchoolTypesRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateSchoolTypesRequest;

class SchoolTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SchoolTypes::all(), 200);
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
     * @param  \App\Http\Requests\StoreSchoolTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolTypesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolTypes  $schoolTypes
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolTypes $schoolTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolTypes  $schoolTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolTypes $schoolTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolTypesRequest  $request
     * @param  \App\Models\SchoolTypes  $schoolTypes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolTypesRequest $request, SchoolTypes $schoolTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolTypes  $schoolTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolTypes $schoolTypes)
    {
        //
    }
}
