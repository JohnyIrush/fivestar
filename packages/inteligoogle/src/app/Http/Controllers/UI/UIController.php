<?php

namespace Softwarescares\Inteligoogle\app\Http\Controllers\UI;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Http\Controllers\Controller;

class UIController extends Controller
{
    public function google()
    {
        return Inertia::render('inteli_google/ui/windows/Google');
    }

    public function form()
    {
        return Inertia::render("inteli_admission/ui/plugins/google/form");
    }
}
