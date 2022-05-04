<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers\UI;

use Softwarescares\Inteliacademic\app\Http\Controllers\Controller;
use Softwarescares\Inteliacademic\app\Models\Academic;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreAcademicRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateAcademicRequest;
use Inertia\Inertia;

class AcademicController extends Controller
{
    public function academic()
    {
        return Inertia::render('Academic/windows/Academic');
    }
}
