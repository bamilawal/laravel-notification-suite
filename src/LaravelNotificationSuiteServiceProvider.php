<?php

namespace Bamilawal\LaravelNotificationSuite;

use Illuminate\Support\ServiceProvider;
use Bamilawal\LaravelNotificationSuite\Console\ActivateCommand;

class LaravelNotificationSuiteServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-notification-suite.php',
            'laravel-notification-suite'
        );
    }

    public function boot(): void
    {
        // Load views for emails & notifications
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'laravel-notification-suite'
        );

        if ($this->app->runningInConsole()) {

            // Publish config
            $this->publishes([
                __DIR__ . '/../config/laravel-notification-suite.php' =>
                    config_path('laravel-notification-suite.php'),
            ], 'laravel-notification-suite-config');

            // Publish views (optional override)
            $this->publishes([
                __DIR__ . '/../resources/views' =>
                    resource_path('views/vendor/laravel-notification-suite'),
            ], 'laravel-notification-suite-views');

            // Register artisan commands
            $this->commands([
                ActivateCommand::class,
            ]);
        }
    }
}
