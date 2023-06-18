<?php

use App\Http\Controllers\Api\V1\TourApiController;
use App\Http\Controllers\Api\V1\TravelApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\AuthApiController;

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



Route::prefix('admin')
    ->middleware(['auth:sanctum'])->group(function () {
        Route::post('travels', [TravelApiController::class, 'create']);
        Route::post('tours', [TourApiController::class, 'create']);
    });

Route::post("admin/login", [AuthApiController::class, 'login']);
Route::get('travels', [TravelApiController::class, 'index']);
Route::get('travels/{travel:slug}/tours', [TourApiController::class, 'index']);
