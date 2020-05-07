<?php

namespace splittlogic\xhtml;

use Illuminate\Support\ServiceProvider;

class xhtmlServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'splittlogic');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'xhtml');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/xhtml.php', 'xhtml');

        // Register the service the package provides.
        $this->app->singleton('xhtml', function ($app) {
            return new xhtml;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['xhtml'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/xhtml.php' => config_path('xhtml.php'),
        ], 'xhtml.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/splittlogic'),
        ], 'xhtml.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/splittlogic'),
        ], 'xhtml.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/splittlogic'),
        ], 'xhtml.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
