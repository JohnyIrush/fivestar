<?php

namespace Softwarescares\Inteliconfig\app\Http\Controllers\UI;

use Inertia\Inertia;
use Softwarescares\Inteliconfig\app\Http\Controllers\Controller;

class UIController extends Controller
{
    public function config()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            ["module" => 'Config']);
    }
}
