<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Intelilibrary\app\Http\Controllers\LibraryController;
use Softwarescares\Intelilibrary\app\Http\Controllers\AuthorController;
use Softwarescares\Intelilibrary\app\Http\Controllers\PublisherController;
use Softwarescares\Intelilibrary\app\Http\Controllers\BookCategoryController;
use Softwarescares\Intelilibrary\app\Http\Controllers\BookController;
use Softwarescares\Intelilibrary\app\Http\Controllers\BookIssueController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("librarian", [LibraryController::class, "librarian"]);

Route::get("analytics", [LibraryController::class, "analytics"]);

Route::get("libraries", [LibraryController::class, "index"]);

Route::get("authors", [AuthorController::class, "index"]);

Route::get("publishers", [PublisherController::class, "index"]);

Route::get("book/categories", [BookCategoryController::class, "index"]);

Route::get("books", [BookController::class, "index"]);

Route::get("book/issue", [BookIssueController::class, "index"]);


/*Crud Application routes*/

/*Library*/
Route::post("library/store", [LibraryController::class, "store"]);
Route::post("library/update", [LibraryController::class, "update"]);
Route::post("library/destroy", [LibraryController::class, "destroy"]);

/*Author*/
Route::post("library/author/store", [AuthorController::class, "store"]);
Route::post("library/author/update", [AuthorController::class, "update"]);
Route::post("library/author/destroy", [AuthorController::class, "destroy"]);

/*Book Category*/
Route::post("library/book/category/store", [BookCategoryController::class, "store"]);
Route::post("library/book/category/update", [BookCategoryController::class, "update"]);
Route::post("library/book/category/destroy", [BookCategoryController::class, "destroy"]);

/*Book Issue*/
Route::post("library/book/issue/store", [BookIssueController::class, "store"]);
Route::post("library/book/issue/update", [BookIssueController::class, "update"]);
Route::post("library/book/issue/destroy", [BookIssueController::class, "destroy"]);


/*Publisher*/
Route::post("library/publisher/store", [PublisherController::class, "store"]);
Route::post("library/publisher/update", [PublisherController::class, "update"]);
Route::post("library/publisher/destroy", [PublisherController::class, "destroy"]);

/*Book*/
Route::post("library/book/store", [BookController::class, "store"]);
Route::post("library/book/update", [BookController::class, "update"]);
Route::post("library/book/destroy", [BookController::class, "destroy"]);
     // Book 
     Route::get("library/book/create", [BookController::class, "create"]);
