<?php

use App\Http\Controllers\ECommerce\CategoryController;
use App\Models\ECommerce\Category;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| About API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix("category")->group(function () {
    Route::get('', [CategoryController::class, 'index']);
    Route::post('', [CategoryController::class, 'store'])->middleware('auth:sanctum');
    Route::get('{id}', [CategoryController::class, 'show']);
    Route::put('{id}', [CategoryController::class, 'update'])->middleware('auth:sanctum');
    Route::delete('{id}', [CategoryController::class, 'destroy'])->middleware('auth:sanctum');
});
