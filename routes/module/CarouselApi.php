<?php

use App\Http\Controllers\Cms\AboutController;
use App\Http\Controllers\Cms\CarouselController;
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

Route::prefix('carousel')->group(function () {
    Route::get('', [CarouselController::class, 'index']);
    Route::post('', [CarouselController::class, 'store']);
    Route::post('media', [CarouselController::class, 'media']);
});
