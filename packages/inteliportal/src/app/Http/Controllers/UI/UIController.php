<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers\UI;

use Softwarescares\Inteliportal\app\Http\Controllers\Controller;


use Inertia\Inertia;

class UIController extends Controller
{
    public function student()
    {

        return Inertia::render("inteli_portal/ui/windows/Student");
    }

    public function guardian()
    {

        return Inertia::render("inteli_portal/ui/windows/Guardian");
    }

    public function staff()
    {

        return Inertia::render("inteli_portal/ui/windows/Staff");
    }
}
