<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\ChoiceQuestion;
use Softwarescares\Inteliform\app\Http\Requests\StoreChoiceQuestionRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateChoiceQuestionRequest;

class ChoiceQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreChoiceQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChoiceQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChoiceQuestion  $choiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ChoiceQuestion $choiceQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChoiceQuestion  $choiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ChoiceQuestion $choiceQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChoiceQuestionRequest  $request
     * @param  \App\Models\ChoiceQuestion  $choiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChoiceQuestionRequest $request, ChoiceQuestion $choiceQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChoiceQuestion  $choiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChoiceQuestion $choiceQuestion)
    {
        //
    }
}
