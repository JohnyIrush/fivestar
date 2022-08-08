<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use App\Models\User;
use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Http\Requests\StoreStaffRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Intelistaff\app\Http\Controllers\Controller;
use Softwarescares\Intelistaff\app\Models\Teacher;

class StaffController extends Controller
{
    public function index()
    {
        return response()->json(Staff::with("user")->get());
    }

    public function getDetails()
    {
        $userid = 22;

        $details = Staff::with("user","occupation","category","gender")->where("user_id", $userid)->get();

        $teacher = null;
        $section = null;
        $stream =  null;
        $level = null;

        if(User::find(22)->staff->category_id == 1)
        {
            $teacherid =  Staff::find(User::find($userid)->staff->id)->teacher->id;
            $teacher = Teacher::with("subjects","department","levels","hostel")->where("id", $teacherid)->get();
            $section = Teacher::find($teacherid)->section;
            $stream =  ($section == null)? null : Stream::find($section->stream_id);
            $level = ($section == null)? null : Level::find($section->level_id);
        }

        return response()->json(["details" => $details, "teacher" => $teacher, "stream" => $stream, "level" => $level]);
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
     * @param  \App\Http\Requests\StoreOccupationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request, Staff $staff)
    {
        $staff->user_id = $request->input("user_id");
        $staff->firstname = $request->input("firstname");
        $staff->lastname = $request->input("lastname");

        $staff->bio = $request->input("bio");

        $staff->gender_id = $request->input("gender_id");
        $staff->address = $request->input("address");


        $staff->city_id = $request->input("city_id");
        $staff->town_id = $request->input("town_id");

        $staff->section_id = $request->input("section_id");

        $staff->subjects()->attach($request->input("subjects"));
        $staff->levels()->attach($request->input("levels"));

        $staff->department_id = $request->input("department_id");
        $staff->hostel_id = $request->input("hostel_id");

        $staff->type = "staff";

        $staff = $staff->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationRequest  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
