<?php

namespace Softwarescares\Intelicommunication\app\Http\Controllers\UI;

use Softwarescares\Intelicommunication\app\Http\Controllers\Controller;


use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Staff
     */
    public function staff()
    {
        return Inertia::render('');
    }

}
