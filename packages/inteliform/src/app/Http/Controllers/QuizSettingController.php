<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\QuizSetting;
use Softwarescares\Inteliform\app\Http\Requests\StoreQuizSettingRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateQuizSettingRequest;

class QuizSettingController extends Controller
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
     * @param  \App\Http\Requests\StoreQuizSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizSetting  $quizSetting
     * @return \Illuminate\Http\Response
     */
    public function show(QuizSetting $quizSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizSetting  $quizSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizSetting $quizSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizSettingRequest  $request
     * @param  \App\Models\QuizSetting  $quizSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizSettingRequest $request, QuizSetting $quizSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizSetting  $quizSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizSetting $quizSetting)
    {
        //
    }
}
