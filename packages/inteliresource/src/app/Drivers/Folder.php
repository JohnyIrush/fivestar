<?php
namespace Softwarescares\Inteliresource\app\Drivers;
use Softwarescares\Inteliresource\app\Contracts\FolderInterface;
use Illuminate\Support\Facades\Storage;

class Folder implements FolderInterface
{
    public function create($directory)
    {
        Storage::makeDirectory($directory);
    }

    public function recycle($directory)
    {
        Storage::deleteDirectory($directory);
    }

    public function delete($directory)
    {
        Storage::deleteDirectory($directory);
    }

    public function move()
    {

    }

    public function copy()
    {

    }

    public function rename()
    {

    }

    public function properties()
    {

    }

    public function restore()
    {

    }

    public function show(File $file)
    {
        $folders = [];
        foreach (Storage::allDirectories('/') as $folder)
        {
            array_push($folders,
            [
                'name' => $folder,
                'capacity' => $file->sizeFormat($this->capacity('/' . $folder)),
                'totalFiles' => sizeof(Storage::allFiles($folder)),
                'mbCapacity' => $this->getFolderSizeInMB($folder)
            ]);
        }
      return $folders;
    }

    public function visisble(){

    }

    public function compress(){

    }

    public function download()
    {

    }
    public function stream()
    {

    }
    public function hide()
    {

    }

    public function capacity($directory)
    {
        $files = Storage::allFiles($directory);
        $capacity = 0;

        foreach($files as $file)
        {
            $capacity += (int)Storage::size($file);
        }

        return $capacity;
    }

    public function getFolderSizeInMB($directory)
    {
        return round(($this->capacity($directory)/1048576),2);
    }

}
