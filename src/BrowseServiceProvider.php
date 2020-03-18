<?php

namespace Shengfai\LaravelBrowse;

use Illuminate\Support\ServiceProvider;

class BrowseServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            realpath(__DIR__ . '/../database/migrations') => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    
    }
}