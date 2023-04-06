<?php

use App\Http\Controllers as Controllers;

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

Route::group(['prefix' => 'books'], function () {
    Route::get('', [Controllers\BookController::class, 'index']);
    Route::post('insert', [Controllers\BookController::class, 'insert']);
});
