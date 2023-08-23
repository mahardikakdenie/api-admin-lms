<?php

use App\Http\Controllers\Dashboard\SubjectController;
use App\Http\Controllers\Main\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Subject Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('subject')->group(function () {
    Route::get('', [SubjectController::class, 'index']);
    Route::get('summary', [SubjectController::class, 'summary']);
    Route::post('', [SubjectController::class, 'store']);
    Route::get('{id}', [SubjectController::class, 'show']);
    Route::put('{id}', [SubjectController::class, 'update']);
    Route::delete('{id}', [SubjectController::class, 'destroy']);
    Route::patch('{id}', [SubjectController::class, 'restore']);
    // Route::delete('{id}/deletes', [SubjectController::class, 'destroys']);
});
