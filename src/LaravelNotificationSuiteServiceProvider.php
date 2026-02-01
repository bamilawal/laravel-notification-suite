<?php

namespace Bamilawal\LaravelNotificationSuite;

use Illuminate\Support\ServiceProvider;

class BlogPackageServiceProvider extends ServiceProvider
{
  public function register()
  {
      $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravelnotificationsuite');

  }

  public function boot()
  {
    if ($this->app->runningInConsole()) {

        $this->publishes([
        __DIR__.'/../config/config.php' => config_path('laravel-notification-suite.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-notification-suite'),
        ], 'views');

        // Publish view components
        $this->publishes([
            __DIR__.'/../src/View/Components/' => app_path('View/Components'),
            __DIR__.'/../resources/views/components/' => resource_path('views/components'),
        ], 'view-components');

    }

    $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelnotificationsuite');

  }
}