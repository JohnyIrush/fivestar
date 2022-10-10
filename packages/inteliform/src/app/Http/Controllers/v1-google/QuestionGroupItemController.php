<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\QuestionGroupItem;
use Softwarescares\Inteliform\app\Http\Requests\StoreQuestionGroupItemRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateQuestionGroupItemRequest;

class QuestionGroupItemController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestionGroupItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionGroupItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionGroupItem  $questionGroupItem
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionGroupItem $questionGroupItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionGroupItem  $questionGroupItem
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionGroupItem $questionGroupItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionGroupItemRequest  $request
     * @param  \App\Models\QuestionGroupItem  $questionGroupItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionGroupItemRequest $request, QuestionGroupItem $questionGroupItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionGroupItem  $questionGroupItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionGroupItem $questionGroupItem)
    {
        //
    }
}
