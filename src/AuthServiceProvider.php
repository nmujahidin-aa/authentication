<?php

namespace Mujahidin\Authentication;

use Illuminate\Support\Facades\Route as RouteFacade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class AuthServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/authentication.php', 'authentication');
    }

    public function boot()
    {
        // Load routes dari file auth.php
        $this->loadRoutesFrom(__DIR__ . '/routes/auth.php');

        // Publikasi konfigurasi
        $this->publishes([
            __DIR__ . '/../config/authentication.php' => config_path('authentication.php'),
        ], 'config');

        // Load migrations dan seeders
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // Load seeders manually if needed
        if ($this->app->runningInConsole()) {
            \Illuminate\Support\Facades\Artisan::call('db:seed', ['--class' => 'Database\\Seeders\\YourSeederClass']);
        }
    }
}
