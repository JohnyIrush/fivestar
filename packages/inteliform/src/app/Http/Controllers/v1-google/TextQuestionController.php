<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\TextQuestion;
use Softwarescares\Inteliform\app\Http\Requests\StoreTextQuestionRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateTextQuestionRequest;

class TextQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreTextQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTextQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TextQuestion  $textQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(TextQuestion $textQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TextQuestion  $textQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(TextQuestion $textQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTextQuestionRequest  $request
     * @param  \App\Models\TextQuestion  $textQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTextQuestionRequest $request, TextQuestion $textQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TextQuestion  $textQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TextQuestion $textQuestion)
    {
        //
    }
}
