<?php

use App\Http\Controllers\Cms\AboutController;
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

Route::prefix('dashboard')->group(function () {
    Route::prefix('about')->group(function () {
        Route::get("", [AboutController::class, 'index']);
    });
});
