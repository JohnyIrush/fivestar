<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers;

use Softwarescares\Inteliadmission\app\Models\Ban;
use Softwarescares\Inteliadmission\app\Http\Requests\StoreBanRequest;
use Softwarescares\Inteliadmission\app\Http\Requests\UpdateBanRequest;

class BanController extends Controller
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
     * @param  \App\Http\Requests\StoreBanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function show(Ban $ban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function edit(Ban $ban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBanRequest  $request
     * @param  \App\Models\Ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBanRequest $request, Ban $ban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ban  $ban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ban $ban)
    {
        //
    }
}
