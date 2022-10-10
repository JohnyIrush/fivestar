<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\Grid;
use Softwarescares\Inteliform\app\Http\Requests\StoreGridRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateGridRequest;

class GridController extends Controller
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
     * @param  \App\Http\Requests\StoreGridRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGridRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function show(Grid $grid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function edit(Grid $grid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGridRequest  $request
     * @param  \App\Models\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGridRequest $request, Grid $grid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grid  $grid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grid $grid)
    {
        //
    }
}
