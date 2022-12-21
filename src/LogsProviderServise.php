<?php

namespace Alzughbieh\Logs;

use Illuminate\Support\ServiceProvider;

class LogsProviderServise extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Alzughbieh\Logs\LogsController');

        $this->LoadViewsFrom(__DIR__.'/views','hamza');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

    }
}
