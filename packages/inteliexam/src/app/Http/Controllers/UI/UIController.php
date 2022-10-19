<?php

namespace Softwarescares\Inteliexam\app\Http\Controllers\UI;

use Softwarescares\Inteliexam\app\Http\Controllers\Controller;


use Inertia\Inertia;

class UIController extends Controller
{
	public function exam()
	{
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Exam',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
	}
}
