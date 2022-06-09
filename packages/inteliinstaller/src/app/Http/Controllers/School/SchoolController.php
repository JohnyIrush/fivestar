<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers\School;

use Softwarescares\Inteliinstaller\app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreSchoolRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateSchoolRequest;
use Softwarescares\Inteliinstaller\app\Models\School;

class SchoolController extends Controller
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
     * @param  \App\Http\Requests\StoreSchoolRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolRequest $request, School $school)
    {
        $school->school_name = $request->school_name;
        $school->school_email = $request->school_email;
        $school->school_address = $request->school_address;
        $school->school_web = $request->school_web;
        $school->school_level_id = $request->school_level_id;
        $school->school_phone = $request->school_phone;
        $school->school_location = $request->school_location;
        $school->school_gender_id = $request->school_gender_id;
        $school->school_type_id = $request->school_type_id;
        $school->school_education_system_id = $request->school_education;
        $school->user_id = $request->user_id;
        //$school->inteli_code = $request->inteli_code; // Unique Secret Code for Inteli System Subscripion, Ownership
        // $school->installation_status = $request->installation_status;
        // $school->installation_date = $request->installation_date;
        // $school->uninstallation_date = $request->uninstallation_date
        //$company = new Company(['name' => 'Test']);
        //$user->company()->save($company);
        $school->save();
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
