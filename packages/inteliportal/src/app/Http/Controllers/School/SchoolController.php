<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers\School;

use Softwarescares\Inteliinstaller\app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliinstaller\app\Events\SchoolAcountCreatedEvent;
use Softwarescares\Inteliportal\app\Http\Requests\StoreSchoolRequest;
use Softwarescares\Inteliportal\app\Http\Requests\UpdateSchoolRequest;
use Softwarescares\Inteliportal\app\Models\School;
use Softwarescares\Intelistaff\app\Models\Staff;

class SchoolController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDetails()
    {
        $details = School::find(1)->with("sports","clubs", "account","user","schoolGender","schoolEducationSystem","schoolLevel","schoolType","subjects")->get();
        $levels = Level::all();
        $sections = Section::with("teacher")->get();
        $staffs = Staff::with("user","occupation","category","gender")->get();
        $teachingstaff = Staff::where("category_id", 1)->get()->count();
        $nonteachingstaff = Staff::where("category_id", 2)->get()->count();
        return response()->json(["details" => $details,"levels" => $levels, "sections" => $sections, "staffs" => $staffs,"teachingstaff" => $teachingstaff,"nonteachingstaff" => $nonteachingstaff]);
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
     * @param  \App\Http\Requests\StoreSchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolRequest $request, School $school)
    {
        $school->school_name = $request->sch_name;
        $school->school_email = $request->sch_email;
        $school->school_address = $request->sch_address;
        $school->school_web = $request->sch_web;
        $school->school_level_id = $request->sch_level_id;
        $school->school_phone = $request->sch_phone;
        $school->school_location = $request->sch_location;
        $school->school_gender_id = $request->sch_gender_id;
        $school->school_type_id = $request->sch_type_id;
        $school->school_education_system_id = $request->sch_system_id;
        $school->user_id = $request->user_id;
        $school->inteli_code = $request->sch_inteli_code; // Unique Secret Code for Inteli System Subscripion, Ownership
        $school->inteli_id = $request->version; // Unique Secret Code for Inteli System Subscripion, Ownership
        $school->save();

        event(new SchoolAcountCreatedEvent());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolRequest  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolRequest $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
