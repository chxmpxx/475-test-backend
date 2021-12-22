<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JewelryInfoController;
use App\Http\Controllers\OrderTaskController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MaterialListController;
use App\Http\Controllers\AdminController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/employee-manager', EmployeeController::class);
Route::apiResource('/customer', CustomerController::class);
Route::apiResource('/order', OrderController::class);
Route::apiResource('/jewelry-info', JewelryInfoController::class);
Route::apiResource('/order-task', OrderTaskController::class);
Route::apiResource('/material', MaterialController::class);
Route::apiResource('/material-list', MaterialListController::class);
Route::apiResource('/admin', AdminController::class);

// Update
Route::put('/order/up/{id}', [OrderController::class, 'upState']);
Route::put('/good/{id}', [OrderTaskController::class, 'good']);
Route::put('/bad/{id}', [OrderTaskController::class, 'bad']);