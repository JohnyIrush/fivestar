<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FileUploadQuestion;
use Softwarescares\Inteliform\app\Http\Requests\StoreFileUploadQuestionRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFileUploadQuestionRequest;

class FileUploadQuestionController extends Controller
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
     * @param  \App\Http\Requests\StoreFileUploadQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileUploadQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileUploadQuestion  $fileUploadQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(FileUploadQuestion $fileUploadQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileUploadQuestion  $fileUploadQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUploadQuestion $fileUploadQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileUploadQuestionRequest  $request
     * @param  \App\Models\FileUploadQuestion  $fileUploadQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileUploadQuestionRequest $request, FileUploadQuestion $fileUploadQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileUploadQuestion  $fileUploadQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileUploadQuestion $fileUploadQuestion)
    {
        //
    }
}
