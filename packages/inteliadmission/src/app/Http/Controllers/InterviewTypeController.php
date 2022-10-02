<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers;

use Softwarescares\Inteliadmission\app\Models\InterviewType;
use Softwarescares\Inteliadmission\app\Http\Requests\StoreInterviewTypeRequest;
use Softwarescares\Inteliadmission\app\Http\Requests\UpdateInterviewTypeRequest;

class InterviewTypeController extends Controller
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

    public function interviewTypes()
    {
        return response()->json(
            [
                "name" => "type",
                "value" => "id",
                "column" => "",
                "options" => InterviewType::all()
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
     * @param  \App\Http\Requests\StoreInterviewTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterviewTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InterviewType  $interviewType
     * @return \Illuminate\Http\Response
     */
    public function show(InterviewType $interviewType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InterviewType  $interviewType
     * @return \Illuminate\Http\Response
     */
    public function edit(InterviewType $interviewType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInterviewTypeRequest  $request
     * @param  \App\Models\InterviewType  $interviewType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterviewTypeRequest $request, InterviewType $interviewType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InterviewType  $interviewType
     * @return \Illuminate\Http\Response
     */
    public function destroy(InterviewType $interviewType)
    {
        //
    }
}
