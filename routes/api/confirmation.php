<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfirmationController;


Route::controller(ConfirmationController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{id}', 'show');
    Route::delete('/{id}', 'destroy');
});
