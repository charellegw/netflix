<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// tambahan
use App\Models\Genre;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('*', function ($view) {
            $view->with('genres', Genre::all());
        });
    }
}
