<?php

namespace RunToCmd\Providers;

use Illuminate\Support\ServiceProvider;
use RunToCmd\Console\Commands\RunToCmdCommand;

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
            __DIR__ . '/../Console/Commands/' => base_path('app/Console/Commands'),
        ]);
        $this->publishes([
            __DIR__ . '/../Services/' => base_path('app/Services'),
        ]);
        $this->Commands([
            RunToCmdCommand::class
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

