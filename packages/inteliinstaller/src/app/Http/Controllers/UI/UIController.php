<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers\UI;

use Softwarescares\Inteliinstaller\app\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class UIController extends Controller
{
    public function installer()
    {
        return Inertia::render('inteli_installer/ui/themes/Installer');
    }
}
