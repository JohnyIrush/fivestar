<?php

use Softwarescares\Inteliform\app\Http\Controllers\UI\UIController;


Route::get("form",[UIController::class,"form"])->name("form");