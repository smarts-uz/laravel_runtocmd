<?php

namespace RunToCmd\Providers;

use Illuminate\Support\ServiceProvider;

class RunServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->publishes([
            __DIR__ . '/../console/command/' => base_path('app/Console/Commands'),
        ]);
        $this->publishes([
            __DIR__ . '/../service/' => base_path('app/Services'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

