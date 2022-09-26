<?php

namespace Softwarescares\Inteligoogle\app\Http\Controllers;

use Softwarescares\Inteligoogle\app\Models\GoogleDoc;
use Softwarescares\Inteligoogle\app\Http\Requests\StoreGoogleDocRequest;
use Softwarescares\Inteligoogle\app\Http\Requests\UpdateGoogleDocRequest;

class GoogleDocController extends Controller
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
     * @param  \App\Http\Requests\StoreGoogleDocRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoogleDocRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleDoc $googleDoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Http\Response
     */
    public function edit(GoogleDoc $googleDoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoogleDocRequest  $request
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoogleDocRequest $request, GoogleDoc $googleDoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoogleDoc  $googleDoc
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoogleDoc $googleDoc)
    {
        //
    }
}
