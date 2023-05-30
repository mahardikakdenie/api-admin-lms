<?php

use App\Http\Controllers\Dashboard\InstitutionController;
use App\Models\Dashboard\Institution;
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

Route::prefix('institution')->group(function () {
    Route::get('', [InstitutionController::class, 'index']);
    Route::post('', [InstitutionController::class, 'store']);
    Route::get('summary', [InstitutionController::class, 'summary']);
    Route::get("{id}", [InstitutionController::class, 'show']);
});
