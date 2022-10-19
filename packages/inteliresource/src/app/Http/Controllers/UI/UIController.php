<?php

namespace Softwarescares\Inteliresource\app\Http\Controllers\UI;

use Softwarescares\Inteliresource\app\Http\Controllers\Controller;
use Softwarescares\Inteliresource\app\Models\UI;
use Softwarescares\Inteliresource\app\Http\Requests\StoreUIRequest;
use Softwarescares\Inteliresource\app\Http\Requests\UpdateUIRequest;
use Inertia\Inertia;

class UIController extends Controller
{

    public function resource()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            ["module" => 'MultiMedia']);
    }

}
