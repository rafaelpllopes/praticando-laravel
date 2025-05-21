<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('series');
});

Route::resource('/series', SeriesController::class);
// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/criar')->name('series.create');
//     Route::post('/series/store')->name('series.store');
// });
