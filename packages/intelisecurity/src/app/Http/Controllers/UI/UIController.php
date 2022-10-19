<?php

namespace Softwarescares\intelisecurity\app\Http\Controllers\UI;

use Softwarescares\intelisecurity\app\Http\Controllers\Controller;

use Softwarescares\intelisecurity\app\Models\Security;
use Softwarescares\intelisecurity\app\Http\Requests\StoreSecurityRequest;
use Softwarescares\intelisecurity\app\Http\Requests\UpdateSecurityRequest;

use Inertia\Inertia;

class StaffController extends Controller
{
    /**
     * Staff
     */
    public function security()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Security',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }

}
