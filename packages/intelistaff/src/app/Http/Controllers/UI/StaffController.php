<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers\UI;

use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Http\Requests\StoreStaffRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;
use Softwarescares\Intelistaff\app\Http\Controllers\Controller;

class StaffController extends Controller
{
    /**
     * Staff
     */
    public function staff()
    {
        return Inertia::render('Staff/windows/Staff');
    }

}
