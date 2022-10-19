<?php

namespace Softwarescares\Intelicareer\app\Http\Controllers\UI;

use Softwarescares\Intelicareer\app\Http\Controllers\Controller;

use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Staff
     */
    public function career()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            ["module" => 'Career']);
    }

}
