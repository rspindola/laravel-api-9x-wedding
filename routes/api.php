<?php

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

Route::name('confirmation.')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Rotas de livros
    |--------------------------------------------------------------------------
    |
    | GET /book
    | POST /book
    | GET /{book}/detail
    | PUT /{book}/update
    | DELETE /{book}/delete
    |
    */
    Route::prefix('confirmation')->group(base_path('routes/api/confirmation.php'));
    Route::prefix('godparents')->group(base_path('routes/api/godparents.php'));
    Route::prefix('message')->group(base_path('routes/api/message.php'));
    Route::prefix('guest')->group(base_path('routes/api/guest.php'));
});
