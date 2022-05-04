<?php

namespace Softwarescares\Intelitimetable\app\Http\Controllers\UI;

use Softwarescares\Intelitimetable\app\Http\Controllers\Controller;
use Softwarescares\Intelitimetable\app\Models\DaySession;
use Softwarescares\Intelitimetable\app\Http\Requests\StoreDaySessionRequest;
use Softwarescares\Intelitimetable\app\Http\Requests\UpdateDaySessionRequest;

class DaySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function daySession()
    {
        return DaySession::all();
    }

}
