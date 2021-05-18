<?php

namespace fahy\LaravelGoogleMaps;

use Illuminate\Support\ServiceProvider;

class LaravelGoogleMapsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravelgooglemaps.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../public/libs/' => public_path('libs'),
            ], 'public');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravelgooglemaps');

        // Register the main class to use with the facade
        $this->app->singleton('laravelgooglemaps', function () {
            return new LaravelGoogleMaps;
        });
    }
}
