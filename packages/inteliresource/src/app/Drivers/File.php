<?php
namespace Softwarescares\Inteliresource\app\Drivers;
use Softwarescares\Inteliresource\app\Contracts\FileInterface;
use Softwarescares\Inteliresource\app\Models\FileManager;
use Illuminate\Support\Facades\Storage;

class File implements FileInterface
{
    public function create()
    {

    }

    public function recycle($id)
    {
        $fileManager = FileManager::find($id);
        Storage::move($fileManager->path, '/RecycleBin' . $fileManager->name);
        $this->updateFilePath($id, '/RecycleBin');
    }

    public function delete($id)
    {
        $fileManager = FileManager::find($id);
        Storage::delete($fileManager->path);
        $fileManager->delete();
    }

    public function move($id, $location)
    {
        $fileManager = FileManager::find($id);
        Storage::move($fileManager->path, $location . '/' . $fileManager->name);
        $this->updateFilePath($id, $location);
    }

    public function copy($id, $location)
    {
        $fileManager = FileManager::find($id);
        //return response()->json($fileManager);
        Storage::copy($fileManager->path, $location . '/' . $fileManager->name);
        $this->updateFilePath($id, $location);
    }

    public function rename()
    {

    }

    public function properties($id)
    {
        return [
            'dirname' => pathinfo(FileManager::find($id)->path)['dirname'],
            'basename' => pathinfo(FileManager::find($id)->path)['basename'],
            'extension' => pathinfo(FileManager::find($id)->path)['extension'],
            'filename' => pathinfo(FileManager::find($id)->path)['filename'],
            'type' => $this->type(pathinfo(FileManager::find($id)->path)['extension']),
            'size' => $this->size($id)
        ];
    }

    public function restore($id)
    {
        $fileManager = FileManager::find($id);
        Storage::move('RecycleBin/' . $fileManager->name, $fileManager->path);
        $this->updateFilePath($id, 'RecycleBin');
    }

    public function show()
    {

    }

    public function download($id)
    {
        $fileManager = FileManager::find($id);
        return Storage::download($fileManager->path);
    }

    public function stream()
    {

    }

    public function hide()
    {

    }

    public function visible()
    {

    }

    public function compress()
    {

    }

    public function type(String $extension)
    {
        /*
        switch (strtolower($extension)) {
            case 'jpg' || 'png' || 'jpeg' || 'apng' || 'avif' || 'gif' || 'pjp' || 'pjpeg' || 'jfif' || 'svg' || 'webp' || 'cur' || 'ico'  || 'bmp' || 'tif'|| 'tiff':
                return 'image';
               break;
            case 'swf' || 'wav' || 'mp3' || 'mp4' || 'mpg' || 'wmv' || 'avi':
                 return 'video';
                break;
            case 'doc' || 'docx' || 'html' || 'htm' || 'odt' || 'pdf' || 'xls' || 'xlsx' || 'ods' || 'ppt' || 'pptx' || 'txt':
                 return 'document';
                break;
            case '7z' || 'arj' || 'debge' || 'pkg' || 'rar.rpmer' || 'tar.gzle' || 'z' || 'zip':
                 return 'compressed';
                break;
            default:
                return 'other';
               break;
        }
        */
         if(strtolower($extension) =='jpg' || strtolower($extension) =='png' || strtolower($extension) =='jpeg' || strtolower($extension) =='apng' || strtolower($extension) =='avif' || strtolower($extension) =='gif' || strtolower($extension) =='pjp' || strtolower($extension) =='pjpeg' || strtolower($extension) =='jfif' || strtolower($extension) =='svg' || strtolower($extension) =='webp' || strtolower($extension) =='cur' || strtolower($extension) =='ico'  || strtolower($extension) =='bmp' || strtolower($extension) =='tif'|| strtolower($extension) =='tiff')
            return 'image';
         if(strtolower($extension) =='swf' || strtolower($extension) =='wav' || strtolower($extension) =='mp4' || strtolower($extension) =='mpg' || strtolower($extension) =='wmv' || strtolower($extension) =='avi')
             return 'video';
         if(strtolower($extension) == 'mp3')
             return 'audio';
         if(strtolower($extension) =='doc' || strtolower($extension) =='docx' || strtolower($extension) =='html' || strtolower($extension) =='htm' || strtolower($extension) =='odt' || strtolower($extension) =='pdf' || strtolower($extension) =='xls' || strtolower($extension) =='xlsx' || strtolower($extension) =='ods' || strtolower($extension) =='ppt' || strtolower($extension) =='pptx' || strtolower($extension) =='txt')
             return 'document';
         if(strtolower($extension) =='7z' || strtolower($extension) =='arj' || strtolower($extension) =='debge' || strtolower($extension) =='pkg' || strtolower($extension) =='rar.rpmer' || strtolower($extension) =='tar.gzle' || strtolower($extension) =='z' || strtolower($extension) =='zip' || strtolower($extension) =='rar')
             return 'compressed';
         else
            return 'other';
    }

    public function size($id)
    {
        $bytes = (int)Storage::size('/'. FileManager::find($id)->path);

        if($bytes >= 1099511627776  )
        {
            return ((string) round(($bytes/1099511627776),2)) . 'TB';
        }
        else if($bytes >= 1073741824 )
        {
            return ((string) round(($bytes/1073741824),2)) . 'GB';
        }
        else if($bytes >= 1048576)
        {
            return ((string) round(($bytes/1048576),2)) . 'MB';
        }
        else if($bytes >= 1024  )
        {
            return ((string) round(($bytes/1024),2)) . 'KB';
        }
        else
        {
            return (string)$bytes . 'B';
        }

    }

    // returs unformatted integer
    public function fileSize($id)
    {
        $bytes = (int)Storage::size('/'. FileManager::find($id)->path);

        if($bytes >= 1099511627776)
        {
            return ((int) ($bytes/1099511627776));
        }
        else if($bytes >= 1073741824)
        {
            return ((int) ($bytes/1073741824));
        }
        else if($bytes >= 1024)
        {
            return ((int) ($bytes/1024));
        }
        else
        {
            return (int)$bytes;
        }

    }

    public function sizeFormat($bytes)
    {
        if($bytes >= 1099511627776  )
        {
            return ((string) round(($bytes/1099511627776),2)) . 'TB';
        }
        else if($bytes >= 1073741824  )
        {
            return ((string) round(($bytes/1073741824),2)) . 'GB';
        }
        else if($bytes >= 1048576)
        {
            return ((string) round(($bytes/1048576),2)) . 'MB';
        }
        else if($bytes >= 1024  )
        {
            return ((string) round(($bytes/1024), 2)) . 'KB';
        }
        else
        {
            return (string)$bytes . 'B';
        }

    }

    public function updateFilePath($id, $location)
    {
        $fileManager = FileManager::find($id);
        $fileManager->path = $location . '/' . $fileManager->name;
        $fileManager->update();
    }

    public function checkIfFileExist($id)
    {
        if (Storage::disk('local')->exists(FileManager::find($id)->path))
        {
            return true;
        }

        return true;
    }




}

