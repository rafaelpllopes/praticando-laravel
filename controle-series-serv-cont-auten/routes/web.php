<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('series');
})->middleware(Authenticate::class);

Route::resource('/series', SeriesController::class)
    ->except('show');

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])
    ->name('seasons.index');
Route::get('/seasons/{seasons}/episodes', [EpisodesController::class, 'index'])
    ->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])
    ->name('episodes.update');

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

Route::get('/register', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/register', [UserController::class, 'store'])
    ->name('users.store');

Route::get('/logout', [LoginController::class, 'destroy'])
    ->name('logout');