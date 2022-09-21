<?php

namespace Softwarescares\Intelifinance\app\Http\Controllers\UI;

use Softwarescares\Intelifinance\app\Http\Controllers\Controller;
use Softwarescares\Intelifinance\app\Models\UI;
use Softwarescares\Intelifinance\app\Http\Requests\StoreUIRequest;
use Softwarescares\Intelifinance\app\Http\Requests\UpdateUIRequest;
use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Render the main finance
     */
    public function finance()
    {
        return Inertia::render('inteli_finance/ui/windows/Finance');
    }

}
