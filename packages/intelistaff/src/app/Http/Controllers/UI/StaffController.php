<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Http\Controllers\Controller;

use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Http\Requests\StoreStaffRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;

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
