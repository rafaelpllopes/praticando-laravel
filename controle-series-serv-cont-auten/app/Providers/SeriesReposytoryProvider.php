<?php

namespace App\Providers;

use App\Repository\EloquentSeriesRepository;
use App\Repository\SeriesRepository;
use Illuminate\Support\ServiceProvider;

class SeriesReposytoryProvider extends ServiceProvider
{
    public array $bindings = [
        SeriesRepository::class => EloquentSeriesRepository::class
    ];
    // /**
    //  * Register services.
    //  */
    // public function register(): void
    // {
    //     $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    // }

    // /**
    //  * Bootstrap services.
    //  */
    // public function boot(): void
    // {
    //     //
    // }
}
