<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Inteliinventory\app\Http\Controllers\AttributeController;
use Softwarescares\Inteliinventory\app\Http\Controllers\BrandController;
use Softwarescares\Inteliinventory\app\Http\Controllers\CustomerController;
use Softwarescares\Inteliinventory\app\Http\Controllers\ExpenseCategoryController;
use Softwarescares\Inteliinventory\app\Http\Controllers\ExpenseController;
use Softwarescares\Inteliinventory\app\Http\Controllers\HostelController;
use Softwarescares\Inteliinventory\app\Http\Controllers\InventoryController;
use Softwarescares\Inteliinventory\app\Http\Controllers\InvoiceController;
use Softwarescares\Inteliinventory\app\Http\Controllers\ManufacturerController;
use Softwarescares\Inteliinventory\app\Http\Controllers\MeasurementController;
use Softwarescares\Inteliinventory\app\Http\Controllers\ProductCategoryController;
use Softwarescares\Inteliinventory\app\Http\Controllers\ProductController;
use Softwarescares\Inteliinventory\app\Http\Controllers\PurchaseController;
use Softwarescares\Inteliinventory\app\Http\Controllers\RoomController;
use Softwarescares\Inteliinventory\app\Http\Controllers\SaleController;
use Softwarescares\Inteliinventory\app\Http\Controllers\SupplierController;
use Softwarescares\Inteliinventory\app\Http\Controllers\WarehouseController;
use Softwarescares\Inteliinventory\app\Http\Controllers\WeightController;

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

Route::get('hostels', [HostelController::class,'index']);
Route::get('rooms', [RoomController::class,'index']);

Route::get('warehouse', [WarehouseController::class,'index']);

Route::get('products', [ProductController::class,'index']);
Route::get('products/categories', [ProductCategoryController::class,'index']);
Route::get('products/brands', [BrandController::class,'index']);
Route::get('products/manufacturers', [ManufacturerController::class,'index']);

Route::get('weights', [WeightController::class,'index']);
Route::get('measurements', [MeasurementController::class,'index']);
Route::get('attributes', [AttributeController::class,'index']);

Route::get('purchases', [PurchaseController::class,'index']);

Route::get('customers', [CustomerController::class,'index']);

Route::get('suppliers', [SupplierController::class,'index']);


Route::get('expenses/categories', [ExpenseCategoryController::class,'index']);

Route::get('expenses', [ExpenseController::class,'index']);

Route::get('invoices', [InvoiceController::class,'index']);

Route::get('sales', [SaleController::class,'index']);


Route::get("managers",[InventoryController::class, 'managers']);
