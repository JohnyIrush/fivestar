<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\VideoItem;
use Softwarescares\Inteliform\app\Http\Requests\StoreVideoItemRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateVideoItemRequest;

class VideoItemController extends Controller
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
     * @param  \App\Http\Requests\StoreVideoItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoItem  $videoItem
     * @return \Illuminate\Http\Response
     */
    public function show(VideoItem $videoItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoItem  $videoItem
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoItem $videoItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoItemRequest  $request
     * @param  \App\Models\VideoItem  $videoItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoItemRequest $request, VideoItem $videoItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoItem  $videoItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoItem $videoItem)
    {
        //
    }
}
