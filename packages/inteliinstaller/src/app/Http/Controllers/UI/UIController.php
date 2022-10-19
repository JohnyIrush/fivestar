<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers\UI;

use App\Models\User;
use App\Notifications\InteliSystemIntsallAttempt;
use Softwarescares\Inteliinstaller\app\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;

class UIController extends Controller
{
    public function installer()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Installer',
                "display" => [
                    "navbar" => false,
                    'sidebar' => false,
                    'footer' => false
                ]
            ]);

        $users = User::role('Admin')->get(); // Returns only users with the role 'Admin'

        foreach ($users as $key => $user)
        {
            $user->notify(new InteliSystemIntsallAttempt("New Inteli system installation Attempt!"));
        }
    }
}
