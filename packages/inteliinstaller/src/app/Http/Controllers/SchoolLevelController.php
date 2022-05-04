<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers;

use Softwarescares\Inteliinstaller\app\Models\SchoolLevel;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreSchoolLevelRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateSchoolLevelRequest;

class SchoolLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SchoolLevel::all(), 200);
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
     * @param  \App\Http\Requests\StoreSchoolLevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolLevel  $schoolLevel
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolLevel $schoolLevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolLevel  $schoolLevel
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolLevel $schoolLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolLevelRequest  $request
     * @param  \App\Models\SchoolLevel  $schoolLevel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolLevelRequest $request, SchoolLevel $schoolLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolLevel  $schoolLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolLevel $schoolLevel)
    {
        //
    }
}
