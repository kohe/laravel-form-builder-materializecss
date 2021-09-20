<?php

namespace Kohe\LaravelFormBuilderMaterializecss;

use Illuminate\Support\ServiceProvider;

class LaravelFormBuilderMaterializecssServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config' => config_path(),
                    __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-form-builder'),
                ],
                'laravel-form-builder-materializecss'
            );
        }
    }
}
