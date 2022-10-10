<?php

namespace App\Http\Controllers;

use Softwarescares\Inteliform\app\Models\TimeQuestion;
use Softwarescares\Inteliform\app\Http\Requests\StoreTimeQuestionRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateTimeQuestionRequest;

class TimeQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreTimeQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTimeQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeQuestion  $timeQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(TimeQuestion $timeQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeQuestion  $timeQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(TimeQuestion $timeQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTimeQuestionRequest  $request
     * @param  \App\Models\TimeQuestion  $timeQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTimeQuestionRequest $request, TimeQuestion $timeQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeQuestion  $timeQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeQuestion $timeQuestion)
    {
        //
    }
}
