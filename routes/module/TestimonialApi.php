<?php

use App\Http\Controllers\Cms\AboutController;
use App\Http\Controllers\Cms\CarouselController;
use App\Http\Controllers\Cms\TestimonialController;
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

Route::prefix('testimonials')->group(function () {
    Route::get('', [TestimonialController::class]);
});
