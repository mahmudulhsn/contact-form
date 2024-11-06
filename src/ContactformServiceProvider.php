<?php

namespace Mahmudulhsn\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactformServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([__DIR__ . "/../config/config.php" => config_path("contactform.php")], "contactform-config");
        $this->loadRoutesFrom(__DIR__ . "/../routes/web.php");
        $this->loadViewsFrom(__DIR__ . "/../resources/views", "contactform");
        $this->loadMigrationsFrom(__DIR__ . "/../database/migrations");
    }
}
