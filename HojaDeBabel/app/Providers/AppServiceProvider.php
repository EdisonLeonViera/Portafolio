<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        //Esto limita los campos VARCHAR a 191 caracteres (191 * 4 = 764 bytes < 1000).
        Schema::defaultStringLength(191);
    }
}
