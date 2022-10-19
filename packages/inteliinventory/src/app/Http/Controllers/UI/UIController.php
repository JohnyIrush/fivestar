<?php

namespace Softwarescares\Inteliinventory\app\Http\Controllers\UI;

use Softwarescares\Inteliinventory\app\Http\Controllers\Controller;

use Softwarescares\Inteliinventory\app\Models\Inventory;
use Softwarescares\Inteliinventory\app\Http\Requests\StoreInventoryRequest;
use Softwarescares\Inteliinventory\app\Http\Requests\UpdateInventoryRequest;

use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Staff
     */
    public function inventory()
    {
        return Inertia::render("Theme/windows/Dashboard", 
            [
                "module" => 'Inventory',
                "display" => [
                    "navbar" => true,
                    'sidebar' => true,
                    'footer' => true
                ]
            ]);
    }

}
