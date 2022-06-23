<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers;

use Softwarescares\Inteliinstaller\app\Models\InteliApp;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreInteliAppRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateInteliAppRequest;

class InteliAppController extends Controller
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
     * @param  \App\Http\Requests\StoreInteliAppRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInteliAppRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InteliApp  $inteliApp
     * @return \Illuminate\Http\Response
     */
    public function show(InteliApp $inteliApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InteliApp  $inteliApp
     * @return \Illuminate\Http\Response
     */
    public function edit(InteliApp $inteliApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInteliAppRequest  $request
     * @param  \App\Models\InteliApp  $inteliApp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInteliAppRequest $request, InteliApp $inteliApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InteliApp  $inteliApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(InteliApp $inteliApp)
    {
        //
    }
}
