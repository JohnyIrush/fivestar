<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\ScaleQuestion;
use Softwarescares\Inteliform\app\Http\Requests\StoreScaleQuestionRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateScaleQuestionRequest;

class ScaleQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreScaleQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScaleQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScaleQuestion  $scaleQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ScaleQuestion $scaleQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScaleQuestion  $scaleQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ScaleQuestion $scaleQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScaleQuestionRequest  $request
     * @param  \App\Models\ScaleQuestion  $scaleQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScaleQuestionRequest $request, ScaleQuestion $scaleQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScaleQuestion  $scaleQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScaleQuestion $scaleQuestion)
    {
        //
    }
}
