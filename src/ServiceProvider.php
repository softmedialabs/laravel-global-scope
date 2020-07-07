<?php

namespace Softmedialabs\LaravelGlobalScope;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Softmedialabs\LaravelGlobalScope\Commands\ScopeMakeCommand;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(ScopeMakeCommand::class);
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
