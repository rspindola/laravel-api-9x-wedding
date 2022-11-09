<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::controller(GuestController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::get('/{id}', 'show');
    Route::delete('/{id}', 'destroy');
});
