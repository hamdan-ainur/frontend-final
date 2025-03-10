<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $LINKAPI = 'http://34.42.90.237/api';

        $this->app->singleton('LinkApi', function () use ($LINKAPI) {
            return $LINKAPI;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
