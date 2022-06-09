<?php

namespace Softwarescares\Inteliai\app\Http\Controllers;

use Softwarescares\Inteliai\app\Models\AI;
use Softwarescares\Inteliai\app\Http\Requests\StoreAIRequest;
use Softwarescares\Inteliai\app\Http\Requests\UpdateAIRequest;

class AIController extends Controller
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
     * @param  \App\Http\Requests\StoreAIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AI  $aI
     * @return \Illuminate\Http\Response
     */
    public function show(AI $aI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AI  $aI
     * @return \Illuminate\Http\Response
     */
    public function edit(AI $aI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAIRequest  $request
     * @param  \App\Models\AI  $aI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAIRequest $request, AI $aI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AI  $aI
     * @return \Illuminate\Http\Response
     */
    public function destroy(AI $aI)
    {
        //
    }
}
