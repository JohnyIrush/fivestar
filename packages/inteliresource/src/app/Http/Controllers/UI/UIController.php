<?php

namespace Softwarescares\Inteliresource\app\Http\Controllers\UI;

use Softwarescares\Inteliresource\app\Http\Controllers\Controller;
use Softwarescares\Inteliresource\app\Models\UI;
use Softwarescares\Inteliresource\app\Http\Requests\StoreUIRequest;
use Softwarescares\Inteliresource\app\Http\Requests\UpdateUIRequest;
use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Render the main dashboard
     */
    public function dashboard()
    {
        return Inertia::render('inteli_resource/ui/windows/Dashboard');
    }


    /**
     * Render the main profile
     */
    public function profile()
    {
        return Inertia::render('inteli_resource/ui/windows/Profile');
    }


    /**
     * Render the main finance
     */
    public function fileManager()
    {
        return Inertia::render('inteli_resource/ui/windows/File-Manager');
    }


    /**
     * Render the main finance
     */
    public function gallery()
    {
        return Inertia::render('inteli_resource/ui/windows/Gallery');
    }


    /**
     * Render the main finance
     */
    public function settings()
    {
        return Inertia::render('inteli_resource/ui/windows/Settings');
    }



}
