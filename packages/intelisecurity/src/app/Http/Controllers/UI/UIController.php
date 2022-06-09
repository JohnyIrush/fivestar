<?php

namespace Softwarescares\Inteliinventory\app\Http\Controllers;

use Softwarescares\Inteliinventory\app\Http\Controllers\Controller;

use Softwarescares\Inteliinventory\app\Models\Inventory;
use Softwarescares\Inteliinventory\app\Http\Requests\StoreInventoryRequest;
use Softwarescares\Inteliinventory\app\Http\Requests\UpdateInventoryRequest;

use Inertia\Inertia;

class StaffController extends Controller
{
    /**
     * Staff
     */
    public function staff()
    {
        return Inertia::render('');
    }

}
