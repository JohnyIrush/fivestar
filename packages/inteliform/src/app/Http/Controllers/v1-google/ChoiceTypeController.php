<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\ChoiceType;
use Softwarescares\Inteliform\app\Http\Requests\StoreChoiceTypeRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateChoiceTypeRequest;

class ChoiceTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreChoiceTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChoiceTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChoiceType  $choiceType
     * @return \Illuminate\Http\Response
     */
    public function show(ChoiceType $choiceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChoiceType  $choiceType
     * @return \Illuminate\Http\Response
     */
    public function edit(ChoiceType $choiceType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChoiceTypeRequest  $request
     * @param  \App\Models\ChoiceType  $choiceType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChoiceTypeRequest $request, ChoiceType $choiceType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChoiceType  $choiceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChoiceType $choiceType)
    {
        //
    }
}
