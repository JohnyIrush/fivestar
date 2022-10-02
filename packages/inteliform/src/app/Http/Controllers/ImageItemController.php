<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\ImageItem;
use Softwarescares\Inteliform\app\Http\Requests\StoreImageItemRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateImageItemRequest;

class ImageItemController extends Controller
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
     * @param  \App\Http\Requests\StoreImageItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImageItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function show(ImageItem $imageItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ImageItem $imageItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImageItemRequest  $request
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImageItemRequest $request, ImageItem $imageItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImageItem  $imageItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageItem $imageItem)
    {
        //
    }
}
