<?php namespace 760524mkfa00\LaravelGoogleMaps;

use Illuminate\Support\ServiceProvider;

class GMapsServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    
    public function boot()
    {
        $this->registerPublishables();
    }

    
    public function registerPublishables()
    {
        $this->publishes([
            __DIR__.'/../config/googlemaps.php' => config_path('googlemaps.php')
        ], 'config');

        
        $this->publishes([
            __DIR__.'/../database/migrations/create_gmaps_geocache_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_gmaps_geocache_table.php')
        ], 'migrations');

        $this->publishes([
            __DIR__.'/../public/libs/' => public_path('libs')
        ], 'public');
                
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GMaps', function ($app) {
            return new GMaps();
        });

    }
    
       

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('GMaps');
    }
}
