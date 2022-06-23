<?php

namespace Softwarescares\Intelicommunication\app\Http\Controllers;

use Softwarescares\Intelicommunication\app\Http\Controllers\Controller;

use Softwarescares\Intelicommunication\app\Models\Communication;
use Softwarescares\Intelicommunication\app\Http\Requests\StoreCommunicationRequest;
use Softwarescares\Intelicommunication\app\Http\Requests\UpdateCommunicationRequest;

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
