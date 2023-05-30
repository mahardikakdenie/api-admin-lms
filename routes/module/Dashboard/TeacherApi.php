<?php

use App\Http\Controllers\Dashboard\TeacherController;
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


Route::prefix("teacher")->middleware(['auth:sanctum'])->group(function () {
    Route::get('', [TeacherController::class, 'index']);
    Route::post('', [TeacherController::class, 'store']);
    Route::get("summary", [TeacherController::class, 'summary']);
    Route::delete('{id}', [TeacherController::class, 'destroy']);
    Route::patch('{id}/active', [TeacherController::class, 'actived']);
});
