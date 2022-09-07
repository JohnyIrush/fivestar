<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Controllers\Controller;
use Softwarescares\Inteliacademic\app\Models\Academic;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreAcademicRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateAcademicRequest;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliacademic\app\plugins\Model\Statistic;
use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelitimetable\app\Models\Venue;

class AcademicController extends Controller
{

    public function statistics(Academic $academic, Statistic $statistic, Staff $staff, Section $section, Stream $stream, Level $level, Subject $subject, Venue $venue)
    {
        return response()->json(
            [
             $statistic->statistic($staff, ["category_id" => 1],  "Number of Teachers", "Total Number of Teachers in School", '<i class="fas fa-chalkboard-teacher"></i>'),
             $statistic->statistic($section, ["status" => true],  "Number of Sections", "Total Number of Sections in School", '<i class="fas fa-puzzle-piece"></i>'),
             $statistic->statistic($stream, ["status" => true],  "Number of Streams", "Total Number of Streams in School", '<i class="fas fa-stream"></i>'),
             $statistic->statistic($level, ["status" => true],  "Number of Levels", "Total in Number of Levels School", '<i class="fas fa-level-up-alt"></i>'),
             $statistic->statistic($subject, ["status" => true],  "Number of Subjects", "Total in Number of Subjects School", '<i class="fas fa-bookmark"></i>'),
             $statistic->statistic($venue, ["status" => true],  "Number of Class Rooms", "Total in Number of Class Rooms School", '<i class="fas fa-house-return"></i>'),
            ]
        );
    }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcademicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function show(Academic $academic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function edit(Academic $academic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcademicRequest $request, Academic $academic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academic  $academic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academic $academic)
    {
        //
    }
}
