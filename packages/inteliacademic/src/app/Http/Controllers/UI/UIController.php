<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers\UI;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Http\Controllers\Controller;

class UIController extends Controller
{
    public function academic()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Academic',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }
}
