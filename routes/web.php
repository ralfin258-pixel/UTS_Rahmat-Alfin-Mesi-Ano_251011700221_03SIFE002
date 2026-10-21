<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

Route::get('/', function () {
    return redirect()->route('plants.index');
});

Route::get('/plants', [PlantController::class, 'index'])
    ->name('plants.index');

Route::get('/plants/{plant}', [PlantController::class, 'show'])
    ->name('plants.show');
