<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\Grading;
use Softwarescares\Inteliform\app\Http\Requests\StoreGradingRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateGradingRequest;

class GradingController extends Controller
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
     * @param  \App\Http\Requests\StoreGradingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grading  $grading
     * @return \Illuminate\Http\Response
     */
    public function show(Grading $grading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grading  $grading
     * @return \Illuminate\Http\Response
     */
    public function edit(Grading $grading)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradingRequest  $request
     * @param  \App\Models\Grading  $grading
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradingRequest $request, Grading $grading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grading  $grading
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grading $grading)
    {
        //
    }
}
