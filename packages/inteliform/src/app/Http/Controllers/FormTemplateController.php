<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FormTemplate;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormTemplateRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormTemplateRequest;

class FormTemplateController extends Controller
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
     * @param  \App\Http\Requests\StoreFormTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormTemplateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormTemplateRequest  $request
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormTemplateRequest $request, FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormTemplate $formTemplate)
    {
        //
    }
}
