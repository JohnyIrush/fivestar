<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers\UI;

use Softwarescares\Inteliportal\app\Http\Controllers\Controller;


use Inertia\Inertia;

class UIController extends Controller
{
    public function student()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Student',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }


    public function guardian()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Guardian',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }

    public function staff()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'StaffPortal',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }

    public function school()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'School',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }
}
