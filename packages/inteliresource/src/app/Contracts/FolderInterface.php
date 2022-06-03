<?php
namespace Softwarescares\Inteliresource\app\Contracts;

use App\Drivers\File;

Interface FolderInterface
{
    public function create($directory);
    public function delete($directory);
    public function move();
    public function copy();
    public function rename();
    public function properties();
    public function restore();
    public function show(File $file);
    public function download();
    public function stream();
    public function hide();
    public function visisble();
    public function compress();
    public function recycle($directory);
    public function capacity($directory);
}
