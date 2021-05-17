<?php

namespace 760524mkfa00\LaravelGoogleMaps;

use Illuminate\Support\ServiceProvider;

class LaravelGoogleMapsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravelgooglemaps');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelgooglemaps');
         $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravelgooglemaps.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../public/libs/' => public_path('libs')
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
