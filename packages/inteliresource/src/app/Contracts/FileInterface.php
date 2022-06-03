<?php
namespace Softwarescares\Inteliresource\app\Contracts;

Interface FileInterface
{
    public function create();
    public function delete($id);
    public function move($id, $location);
    public function copy($id, $location);
    public function rename();
    public function properties($id);
    public function restore($id);
    public function show();
    public function download($id); // download file
    public function stream();
    public function hide();
    public function visible();
    public function compress();
    public function type(String $extension);
    public function size($id);
    public function recycle($id);
}
