<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreLeadersRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateLeadersRequest;
use Softwarescares\Inteliacademic\app\Models\Leaders;

class LeadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // (new Softwarescares\Inteliacademic\app\Http\Controllers\LeadersController())->index()
        return response()->json(Leaders::all());
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
     * @param  \App\Http\Requests\StoreLeadersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeadersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leaders  $leaders
     * @return \Illuminate\Http\Response
     */
    public function show(Leaders $leaders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leaders  $leaders
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaders $leaders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeadersRequest  $request
     * @param  \App\Models\Leaders  $leaders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeadersRequest $request, Leaders $leaders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leaders  $leaders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaders $leaders)
    {
        //
    }
}
