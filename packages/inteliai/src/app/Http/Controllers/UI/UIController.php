<?php

namespace Softwarescares\Inteliai\app\Http\Controllers\UI;

use Softwarescares\Inteliai\app\Http\Controllers\Controller;

use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Staff
     */
    public function ai()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            ["module" => 'AI']);
    }

}
