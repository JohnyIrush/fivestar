<?php

namespace Softwarescares\Intelitimetable\app\Http\Controllers\UI;

use Softwarescares\Intelitimetable\app\Models\UI;
use Softwarescares\Intelitimetable\app\Http\Requests\StoreUIRequest;
use Softwarescares\Intelitimetable\app\Http\Requests\UpdateUIRequest;

use Softwarescares\Intelitimetable\app\Http\Controllers\Controller;

use Inertia\Inertia;

class UIController extends Controller
{
    public function timetable()
    {
        return Inertia::render("inteli_timetable/ui/windows/Timetable");
    }

}
