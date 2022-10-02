<?php

use Softwarescares\Inteligoogle\app\Http\Controllers\UI\UIController;
use Softwarescares\Inteligoogle\app\Http\Controllers\GoogleController;


Route::get("google",[UIController::class,"google"]);
