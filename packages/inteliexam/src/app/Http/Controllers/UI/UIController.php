<?php

namespace Softwarescares\Inteliexam\app\Http\Controllers\UI;

use Softwarescares\Inteliexam\app\Http\Controllers\Controller;


use Inertia\Inertia;

class UIController extends Controller
{
	public function exam()
	{
		return Inertia::render("inteli_exam/ui/windows/Exam");
	}
}
