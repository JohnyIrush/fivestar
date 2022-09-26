<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers;

use Softwarescares\Inteliadmission\app\Models\ApplicantType;
use Softwarescares\Inteliadmission\app\Http\Requests\StoreApplicantTypeRequest;
use Softwarescares\Inteliadmission\app\Http\Requests\UpdateApplicantTypeRequest;

class ApplicantTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreApplicantTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicantTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicantType  $applicantType
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicantType $applicantType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicantType  $applicantType
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicantType $applicantType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicantTypeRequest  $request
     * @param  \App\Models\ApplicantType  $applicantType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicantTypeRequest $request, ApplicantType $applicantType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicantType  $applicantType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicantType $applicantType)
    {
        //
    }
}
