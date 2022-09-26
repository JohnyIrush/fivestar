<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Inteliadmission\app\Models\Admission;
use Softwarescares\Inteliadmission\app\Http\Requests\StoreAdmissionRequest;
use Softwarescares\Inteliadmission\app\Http\Requests\UpdateAdmissionRequest;

use Softwarescares\Inteliacademic\app\plugins\Model\Statistic;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function statistics(Admission $admission, Statistic $statistic, Staff $staff, Student $student)
    {
        return response()->json(
            [
             $statistic->statistic($student, [],  "Number of Students", "Total Number of Active in School", '<i class="fas fa-user-graduate"></i>'),

             $statistic->statistic($staff, ["category_id" => 1],  "Number of Teachers", "Total Number of Teachers in School", '<i class="fas fa-chalkboard-teacher"></i>'),
            ]
        );
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
     * @param  \App\Http\Requests\StoreAdmissionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmissionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdmissionRequest  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmissionRequest $request, Admission $admission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
    }
}
