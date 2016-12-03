<?php
namespace invertedx\routetraffic;

use Illuminate\Support\ServiceProvider;

class RouteTrafficServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'traffic');
        $this->publishes([
            __DIR__ . '/assets/' => public_path('invertedx/traffic'),
        ], 'traffic:assets');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == "local"){
            include __DIR__ . '/Http/routes.php';
        }

    }
}
