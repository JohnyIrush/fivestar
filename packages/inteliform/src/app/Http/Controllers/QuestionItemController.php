<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\QuestionItem;
use Softwarescares\Inteliform\app\Http\Requests\StoreQuestionItemRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateQuestionItemRequest;

class QuestionItemController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestionItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionItem  $questionItem
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionItem $questionItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionItem  $questionItem
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionItem $questionItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionItemRequest  $request
     * @param  \App\Models\QuestionItem  $questionItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionItemRequest $request, QuestionItem $questionItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionItem  $questionItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionItem $questionItem)
    {
        //
    }
}
