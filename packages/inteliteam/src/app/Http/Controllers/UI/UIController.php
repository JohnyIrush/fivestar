<?php

namespace Softwarescares\Inteliteam\app\Http\Controllers\UI;

use Softwarescares\Inteliteam\app\Http\Controllers\Controller;
use Softwarescares\Inteliteam\app\Models\UI;
use Softwarescares\Inteliteam\app\Http\Requests\StoreUIRequest;
use Softwarescares\Inteliteam\app\Http\Requests\UpdateUIRequest;
use Inertia\Inertia;

class UIController extends Controller
{

    public function team()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Team',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }

    public function userManager()
    {
        return Inertia::render('inteli_team/ui/windows/users');
    }

    public function task()
    {
        return Inertia::render('inteli_team/ui/windows/Task');
    }

    public function permissionRoleManager()
    {
        return Inertia::render('inteli_team/ui/windows/Permission-Role');
    }

}
