<?php

namespace Softwarescares\Intelisecurity\app\Http\Controllers\UI;

use Softwarescares\Intelisecurity\app\Http\Controllers\Controller;

use Softwarescares\Intelisecurity\app\Models\Security;
use Softwarescares\Intelisecurity\app\Http\Requests\StoreSecurityRequest;
use Softwarescares\Intelisecurity\app\Http\Requests\UpdateSecurityRequest;

use Inertia\Inertia;

class UIController extends Controller
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
