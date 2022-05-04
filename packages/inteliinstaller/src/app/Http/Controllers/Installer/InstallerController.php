<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers\Installer;

use Softwarescares\Inteliinstaller\app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InstallerController extends Controller
{
    public function installer()
    {
        return Inertia::render('inteli_installer/ui/themes/Installer');
    }
}
