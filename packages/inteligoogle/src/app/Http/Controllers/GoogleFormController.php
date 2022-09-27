<?php

namespace Softwarescares\Inteligoogle\app\Http\Controllers;

use Softwarescares\Inteligoogle\app\Models\GoogleForm;
use Softwarescares\Inteligoogle\app\Http\Requests\StoreGoogleFormRequest;
use Softwarescares\Inteligoogle\app\Http\Requests\UpdateGoogleFormRequest;

use Softwarescares\Inteligoogle\app\Services\GoogleFormService;

class GoogleFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GoogleFormService $googleFormService)
    {
        return response()->json($googleFormService->get(""));
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
     * @param  \App\Http\Requests\StoreGoogleFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGoogleFormRequest $request, GoogleFormService $googleFormService)
    {
        return response()->json($googleFormService->create($request->input("name")));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoogleForm  $googleForm
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleForm $googleForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoogleForm  $googleForm
     * @return \Illuminate\Http\Response
     */
    public function edit(GoogleForm $googleForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGoogleFormRequest  $request
     * @param  \App\Models\GoogleForm  $googleForm
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoogleFormRequest $request, GoogleForm $googleForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoogleForm  $googleForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoogleForm $googleForm)
    {
        //
    }
}
