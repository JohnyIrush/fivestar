<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers;

use Softwarescares\Inteliinstaller\app\Models\SchoolGender;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreSchoolGenderRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateSchoolGenderRequest;

class SchoolGenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SchoolGender::all(), 200);
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
     * @param  \App\Http\Requests\StoreSchoolGenderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolGenderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolGender  $schoolGender
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolGender $schoolGender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolGender  $schoolGender
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolGender $schoolGender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolGenderRequest  $request
     * @param  \App\Models\SchoolGender  $schoolGender
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolGenderRequest $request, SchoolGender $schoolGender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolGender  $schoolGender
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolGender $schoolGender)
    {
        //
    }
}
