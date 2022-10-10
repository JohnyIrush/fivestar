<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\PageBreakItem;
use Softwarescares\Inteliform\app\Http\Requests\StorePageBreakItemRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdatePageBreakItemRequest;

class PageBreakItemController extends Controller
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
     * @param  \App\Http\Requests\StorePageBreakItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageBreakItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageBreakItem  $pageBreakItem
     * @return \Illuminate\Http\Response
     */
    public function show(PageBreakItem $pageBreakItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageBreakItem  $pageBreakItem
     * @return \Illuminate\Http\Response
     */
    public function edit(PageBreakItem $pageBreakItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageBreakItemRequest  $request
     * @param  \App\Models\PageBreakItem  $pageBreakItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageBreakItemRequest $request, PageBreakItem $pageBreakItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageBreakItem  $pageBreakItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageBreakItem $pageBreakItem)
    {
        //
    }
}
