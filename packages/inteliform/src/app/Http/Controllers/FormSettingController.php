<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FormSetting;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormSettingRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormSettingRequest;

class FormSettingController extends Controller
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
     * @param  \App\Http\Requests\StoreFormSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormSetting  $formSetting
     * @return \Illuminate\Http\Response
     */
    public function show(FormSetting $formSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormSetting  $formSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(FormSetting $formSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormSettingRequest  $request
     * @param  \App\Models\FormSetting  $formSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormSettingRequest $request, FormSetting $formSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormSetting  $formSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormSetting $formSetting)
    {
        //
    }
}
