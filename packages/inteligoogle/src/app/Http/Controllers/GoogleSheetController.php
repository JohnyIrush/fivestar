<?php

namespace Softwarescares\Inteligoogle\app\Http\Controllers;

use Softwarescares\Inteligoogle\app\Models\GoogleSheet;
use Softwarescares\Inteligoogle\app\Http\Requests\StoreGoogleSheetRequest;
use Softwarescares\Inteligoogle\app\Http\Requests\UpdateGoogleSheetRequest;

use Softwarescares\Inteligoogle\app\Services\GoogleSheetService;

use Softwarescares\Inteligoogle\app\Http\Controllers\Controller;

class GoogleSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GoogleSheetService $googlesheetservice)
    {
        return response()->json($googlesheetservice->readSheet());
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
     * @param  \App\Http\Requests\StoreGoogleSheetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoogleSheetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoogleSheet  $googleSheet
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleSheet $googleSheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoogleSheet  $googleSheet
     * @return \Illuminate\Http\Response
     */
    public function edit(GoogleSheet $googleSheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoogleSheetRequest  $request
     * @param  \App\Models\GoogleSheet  $googleSheet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoogleSheetRequest $request, GoogleSheet $googleSheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoogleSheet  $googleSheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoogleSheet $googleSheet)
    {
        //
    }
}
