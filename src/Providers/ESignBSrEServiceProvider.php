<?php

namespace DiskominfotikBandaAceh\ESignBSrE\Providers;

use DiskominfotikBandaAceh\ESignBSrE\ESignBSrE;
use Illuminate\Support\ServiceProvider;

class ESignBSrEServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'e-sign-bsre');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'e-sign-bsre');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/e-sign-bsre.php' => config_path('e-sign-bsre.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/e-sign-bsre'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/e-sign-bsre'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/e-sign-bsre'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/e-sign-bsre.php', 'e-sign-bsre');

        // Register the main class to use with the facade
        $this->app->singleton('e-sign-bsre', function () {
            return new ESignBSrE;
        });
    }
}
