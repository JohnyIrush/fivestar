<?php

namespace Softwarescares\Intelicommunication\app\Http\Controllers;

use Softwarescares\Intelicommunication\app\Models\CommunicationMethod;
use Softwarescares\Intelicommunication\app\Http\Requests\StoreCommunicationMethodRequest;
use Softwarescares\Intelicommunication\app\Http\Requests\UpdateCommunicationMethodRequest;

use Softwarescares\Intelicommunication\app\Http\Controllers\Controller;

class CommunicationMethodController extends Controller
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


    public function communicationMethod()
    {
        return response()->json(
            [
                "name" => "method",
                "value" => "id",
                "column" => "",
                "options" => CommunicationMethod::all()
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
     * @param  \App\Http\Requests\StoreCommunicationMethodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunicationMethodRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommunicationMethod  $communicationMethod
     * @return \Illuminate\Http\Response
     */
    public function show(CommunicationMethod $communicationMethod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommunicationMethod  $communicationMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(CommunicationMethod $communicationMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommunicationMethodRequest  $request
     * @param  \App\Models\CommunicationMethod  $communicationMethod
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunicationMethodRequest $request, CommunicationMethod $communicationMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommunicationMethod  $communicationMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommunicationMethod $communicationMethod)
    {
        //
    }
}
