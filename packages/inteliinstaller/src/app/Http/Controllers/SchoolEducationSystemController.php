<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers;

use Softwarescares\Inteliinstaller\app\Models\SchoolEducationSystem;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreSchoolEducationSystemRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateSchoolEducationSystemRequest;

class SchoolEducationSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SchoolEducationSystem::all(), 200);
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
     * @param  \App\Http\Requests\StoreSchoolEducationSystemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolEducationSystemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolEducationSystem  $schoolEducationSystem
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolEducationSystem $schoolEducationSystem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolEducationSystem  $schoolEducationSystem
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolEducationSystem $schoolEducationSystem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolEducationSystemRequest  $request
     * @param  \App\Models\SchoolEducationSystem  $schoolEducationSystem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolEducationSystemRequest $request, SchoolEducationSystem $schoolEducationSystem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolEducationSystem  $schoolEducationSystem
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolEducationSystem $schoolEducationSystem)
    {
        //
    }
}
