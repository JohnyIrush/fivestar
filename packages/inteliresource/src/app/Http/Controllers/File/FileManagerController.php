<?php

namespace Softwarescares\Inteliresource\app\Http\Controllers\File;

use Softwarescares\Inteliresource\app\Drivers\File;
use Softwarescares\Inteliresource\app\Drivers\Folder;
use Softwarescares\Inteliresource\app\Models\FileManager;

use Softwarescares\Inteliresource\app\Models\FileUpload;
use Softwarescares\Inteliresource\app\Http\Requests\StoreFileManagerRequest;
use Softwarescares\Inteliresource\app\Http\Requests\UpdateFileManagerRequest;
use Softwarescares\Inteliresource\app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
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
     * @param  \App\Http\Requests\StoreFileManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileManagerRequest $request)
    {
        /*
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
         ]);
         */


         $fileManager = new FileManager;
         if($request->file()) {
             $file_name = $request->file->getClientOriginalName();
             $file_path = $request->file('file')->storeAs('images', $file_name);
             $fileManager->name = $request->file->getClientOriginalName();
             $fileManager->path = $file_path;
             $fileManager->originalName = '';
             $fileManager->size = '';
             $fileManager->type = '';
             $fileManager->mimeType = '';
             $fileManager->save();

             return response()->json(['success'=>'File uploaded successfully.']);
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function show(FileManager $fileManager)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function edit(FileManager $fileManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileManagerRequest  $request
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileManagerRequest $request, FileManager $fileManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FileManager  $fileManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileManager $fileManager)
    {
        //
    }

    /*Folder Actions*/

    public function createFolder(FileManager $fileManager)
    {
        //
    }

    public function showFolder(FileManager $fileManager)
    {
        //
    }

    public function deleteFolder(FileManager $fileManager)
    {
        //
    }

    public function renameFolder(FileManager $fileManager)
    {
        //
    }

    public function copyFolder(FileManager $fileManager)
    {
        //
    }

    public function moveFolder(FileManager $fileManager)
    {
        //
    }


    public function folderProperties(FileManager $fileManager)
    {
        //
    }

    public function showFolders(FileManager $fileManager, Folder $folder, File $file)
    {
        return response()->json($folder->show($file));
    }

    public function downloadFolder(FileManager $fileManager)
    {
        //
    }

    public function compressFolder(FileManager $fileManager)
    {
        //
    }

    public function streamFolder(FileManager $fileManager)
    {
        //
    }

    public function hideFolder(FileManager $fileManager)
    {
        //
    }

    public function visbleFolder(FileManager $fileManager)
    {
        //
    }




    /*File Actions*/

    public function createFile(FileManager $fileManager)
    {
        //
    }

    public function showFile(FileManager $fileManager, File $fileDriver)
    {
        $images = [];
        $documents = [];
        $videos = [];
        $audios = [];
        $compressed = [];
        $other = [];

        foreach ($fileManager::all() as $file) {
            //if($fileDriver->checkIfFileExist($file->id))
            //{
                $extension = $fileDriver->properties($file->id)['extension'];
                $fileWithProperties = [
                    'id' => $file->id,
                    'name' => $file->name,
                    'path' => $file->path,
                    'size' => $fileDriver->size($file->id),
                    'type' => $fileDriver->type($extension),
                    'extension' => $extension
                ];

                if($fileDriver->type($extension) == 'image')
                {
                    array_push($images, $fileWithProperties);
                }
                else if($fileDriver->type($extension) == 'document')
                {
                    array_push($documents, $fileWithProperties);
                }
                else if($fileDriver->type($extension) == 'video')
                {
                    array_push($videos, $fileWithProperties);
                }
                else if($fileDriver->type($extension) == 'audio')
                {
                    array_push($audios, $fileWithProperties);
                }
                else if($fileDriver->type($extension) == 'compressed')
                {
                    array_push($compressed, $fileWithProperties);
                }
                else
                {
                    array_push($other, $fileWithProperties);
                }
           // }
            }

            return response()->json([
                'images' => $images,
                'documents' => $documents,
                'videos' => $videos,
                'audios' => $audios,
                'compressed' => $compressed,
                'other' => $other
            ]);
    }

    public function recycleFile(FileManager $fileManager, File $file, $id)
    {
        $file->recycle($id);
    }

    public function deleteFile(FileManager $fileManager, File $file, $id)
    {
        $file->delete($id);
    }

    public function renameFile(FileManager $fileManager)
    {
        //
    }

    public function copyFile(FileManager $fileManager, File $file, UpdateFileManagerRequest $request)
    {
        //dd($file);
        //return response()->json($request);
        $file->copy($request->id, $request->location['name']);
    }

    public function moveFile(FileManager $fileManager, File $file, UpdateFileManagerRequest $request)
    {
        $file->move($request->id, $request->location['name']);
    }



    public function fileProperties(FileManager $fileManager, File $file, $id)
    {
        //$bytes = (int)Storage::size('/images/alberta-2297204_1920.jpg');
        //return response()->json($bytes);
        return response()->json($file->properties($id));
    }

    public function showFiles(FileManager $fileManager)
    {
        //
    }

    public function downloadFile(FileManager $fileManager, File $file, $id)
    {
        $file->download($id);
    }

    public function compressFile(FileManager $fileManager)
    {
        //
    }


     public function streamFile(FileManager $fileManager)
     {
         //
     }

     public function hideFile(FileManager $fileManager)
     {
         //
     }

     public function visbleFile(FileManager $fileManager)
     {
         //
     }




}
