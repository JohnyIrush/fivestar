<?php

namespace Softwarescares\Inteliform\app\Http\Controllers\UI;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Softwarescares\Inteliform\app\Http\Controllers\Controller;

class UIController extends Controller
{
    public function form()
    {
        return Inertia::render("inteli_form/ui/windows/Form");
    }
}
