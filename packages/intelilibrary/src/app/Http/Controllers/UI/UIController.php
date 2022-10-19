<?php

namespace Softwarescares\Intelilibrary\app\Http\Controllers\UI;

use Softwarescares\Intelilibrary\app\Http\Controllers\Controller;

use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Staff
     */
    public function library()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Library',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }

}
