<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreQualificationRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateQualificationRequest;
use Softwarescares\Inteliacademic\app\Models\Qualification;

class QualificationController extends Controller
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
     * @param  \App\Http\Requests\StoreQualificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQualificationRequest $request, Qualification $qualification)
    {
        $qualification->student_id = $request->input("student_id");
        $qualification->title = $request->input("title");
        $qualification->school_name = $request->input("school_name");
        $qualification->school_level_id = $request->input("school_level_id");
        $qualification->meangrade = $request->input("meangrade");
        $qualification->meanscore = $request->input("meanscore");
        $qualification->points = $request->input("points");
        $qualification->start_year = $request->input("start_year");
        $qualification->end_year = $request->input("end_year");
        $qualification->duration = $request->input("duration");

        $qualification->subjects()->attach($request->input("subjects"));

        $qualification->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Qualification $qualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQualificationRequest  $request
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQualificationRequest $request, Qualification $qualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification)
    {
        //
    }
}
