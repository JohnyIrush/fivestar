<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers\UI;

use Inertia\Inertia;
use Softwarescares\Inteliadmission\app\Http\Controllers\Controller;


class UIController extends Controller
{
    public function admission()
    {
        return Inertia::render("inteli_admission/ui/windows/Admission");
    }
}
