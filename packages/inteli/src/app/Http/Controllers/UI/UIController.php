<?php

namespace Softwarescares\Inteli\app\Http\Controllers\UI;

use Softwarescares\Inteli\app\Http\Controllers\Controller;

use Inertia\Inertia;

class UIController extends Controller
{
    public function inteli()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Inteli',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }
}
