<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers\UI;

use Inertia\Inertia;
use Softwarescares\Inteliadmission\app\Http\Controllers\Controller;


class UIController extends Controller
{
    public function admission()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Admission',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }
}
