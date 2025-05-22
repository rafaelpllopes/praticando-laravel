<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('series');
});
Route::resource('/series', SeriesController::class)
    ->except('show');
// Route::resource('/series', SeriesController::class)
//     ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);
// Route::controller(SeriesController::class)->group(function () {
//     Route::get('/series', 'index')->name('series.index');
//     Route::get('/series/criar')->name('series.create');
//     Route::post('/series/store')->name('series.store');
// });

// Route::delete('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name('series.destroy');

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
