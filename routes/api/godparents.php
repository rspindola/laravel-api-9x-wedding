<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GodparentsController;


Route::controller(GodparentsController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{id}', 'show');
    Route::delete('/{id}', 'destroy');
});
