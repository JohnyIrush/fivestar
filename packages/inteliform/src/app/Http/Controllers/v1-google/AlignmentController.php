<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\Alignment;
use Softwarescares\Inteliform\app\Http\Requests\StoreAlignmentRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateAlignmentRequest;

class AlignmentController extends Controller
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
     * @param  \App\Http\Requests\StoreAlignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlignmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alignment  $alignment
     * @return \Illuminate\Http\Response
     */
    public function show(Alignment $alignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alignment  $alignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Alignment $alignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlignmentRequest  $request
     * @param  \App\Models\Alignment  $alignment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlignmentRequest $request, Alignment $alignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alignment  $alignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alignment $alignment)
    {
        //
    }
}
