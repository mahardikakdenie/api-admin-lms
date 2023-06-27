<?php

use App\Http\Controllers\Main\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('todo')->group(function () {
    Route::get('', [TodoController::class, 'index']);
    Route::post('', [TodoController::class, 'store']);
    Route::get('{id}', [TodoController::class, 'show']);
});
