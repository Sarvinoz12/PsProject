<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteSerivceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public const HOME = '/redirect-by-role';
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
