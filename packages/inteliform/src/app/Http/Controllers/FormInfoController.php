<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FormInfo;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormInfoRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormInfoRequest;

class FormInfoController extends Controller
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
     * @param  \App\Http\Requests\StoreFormInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormInfo  $formInfo
     * @return \Illuminate\Http\Response
     */
    public function show(FormInfo $formInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormInfo  $formInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(FormInfo $formInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormInfoRequest  $request
     * @param  \App\Models\FormInfo  $formInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormInfoRequest $request, FormInfo $formInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormInfo  $formInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormInfo $formInfo)
    {
        //
    }
}
