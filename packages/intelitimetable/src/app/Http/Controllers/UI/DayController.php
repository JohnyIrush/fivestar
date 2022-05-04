<?php

namespace Softwarescares\Intelitimetable\app\Http\Controllers\UI;

use Softwarescares\Intelitimetable\app\Http\Controllers\Controller;
use Softwarescares\Intelitimetable\app\Models\Day;
use Softwarescares\Intelitimetable\app\Http\Requests\StoreDayRequest;
use Softwarescares\Intelitimetable\app\Http\Requests\UpdateDayRequest;
use Softwarescares\Intelitimetable\app\Models\DaySession;

class DayController extends Controller
{
    /**
     * Display a listing of the Day resource.
     *
     * 
     */
    public function days()
    {
        return Day::with('daySession')->get();
    }
}
