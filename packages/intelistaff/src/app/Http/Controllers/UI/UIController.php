<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers\UI;

use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Http\Requests\StoreStaffRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;
use Softwarescares\Intelistaff\app\Http\Controllers\Controller;

class UIController extends Controller
{
    /**
     * Staff
     */
    public function staff()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Staff',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }

}
