<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReadwarehouseController;
use App\Http\Controllers\CreatewarehouseContoller;
use App\Http\Controllers\DelerewarehouseController;
use App\Http\Controllers\UpdatewarehouseController;
use App\Http\Controllers\ReturnBranchController;
use App\Http\Controllers\BrachOfWarehouseController;
use App\Http\Controllers\DeviceOfWarehouseController;
use App\Http\Controllers\SearchDeviceController;
use App\Http\Controllers\DeviceExportController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StatusChangeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login',LoginController::class)->name('login');
Route::middleware('auth:sanctum','admin')->group(function () {
    Route::get('/read',ReadwarehouseController::class);
    Route::post('/create',CreatewarehouseContoller::class);
    Route::delete('/delete/{id}',DelerewarehouseController::class);
    Route::put('/update/{id}',UpdatewarehouseController::class);
    Route::get('/branches/{id}',ReturnBranchController::class);
    Route::get('/warehouse/{id}/branches',BrachOfWarehouseController::class);
    Route::get('/warehouse/{id}/devices',DeviceOfWarehouseController::class);
    Route::get('/devices/search',SearchDeviceController::class);
    Route::get('/devices/export',DeviceExportController::class);

});
Route::put('/devices/{id}/status',StatusChangeController::class)->middleware('auth:sanctum');


