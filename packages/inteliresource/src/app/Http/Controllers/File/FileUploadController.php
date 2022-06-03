<?php

namespace Softwarescares\Inteliresource\app\Http\Controllers\File;

use Softwarescares\Inteliresource\app\Models\FileUpload;
use Softwarescares\Inteliresource\app\Http\Requests\StoreFileUploadRequest;
use Softwarescares\Inteliresource\app\Http\Requests\UpdateFileUploadRequest;

use Softwarescares\Inteliresource\app\Http\Controllers\Controller;

class FileUploadController extends Controller
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
     * @param  \App\Http\Requests\StoreFileUploadRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(StoreFileUploadRequest $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function show(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function edit(FileUpload $fileUpload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileUploadRequest  $request
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileUploadRequest $request, FileUpload $fileUpload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileUpload  $fileUpload
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileUpload $fileUpload)
    {
        //
    }
}
