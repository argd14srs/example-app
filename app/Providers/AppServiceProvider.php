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
    $this->app->bind(
        \App\Repositories\Contracts\TestRepositoryInterface::class,
        \App\Repositories\TestRepository::class
    );

    $this->app->bind(
        \App\Services\TestService::class,
        function ($app) {
            return new \App\Services\TestService(
                $app->make(\App\Repositories\Contracts\TestRepositoryInterface::class)
            );
        }
    );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
