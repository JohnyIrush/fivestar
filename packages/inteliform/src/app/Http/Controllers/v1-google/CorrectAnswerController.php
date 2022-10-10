<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\CorrectAnswer;
use Softwarescares\Inteliform\app\Http\Requests\StoreCorrectAnswerRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateCorrectAnswerRequest;

class CorrectAnswerController extends Controller
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
     * @param  \App\Http\Requests\StoreCorrectAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCorrectAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorrectAnswer  $correctAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(CorrectAnswer $correctAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorrectAnswer  $correctAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(CorrectAnswer $correctAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCorrectAnswerRequest  $request
     * @param  \App\Models\CorrectAnswer  $correctAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCorrectAnswerRequest $request, CorrectAnswer $correctAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorrectAnswer  $correctAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorrectAnswer $correctAnswer)
    {
        //
    }
}
