<?php

declare(strict_types=1);

namespace TheBachtiarz\Finance;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use TheBachtiarz\Finance\Interfaces\Configs\FinanceConfigInterface;
use TheBachtiarz\Finance\Providers\AppsProvider;

use function assert;
use function config_path;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $appsProvider = $this->app->make(AppsProvider::class);
        assert($appsProvider instanceof AppsProvider);

        $appsProvider->registerConfig();

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands(AppsProvider::COMMANDS);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $_configName  = FinanceConfigInterface::CONFIG_NAME;
        $_publishName = 'thebachtiarz-auth';

        $this->publishes([__DIR__ . "/../config/$_configName.php" => config_path("$_configName.php")], "$_publishName-config");
        // $this->publishes([__DIR__ . '/../database/migrations' => database_path('migrations')], "$_publishName-migrations");
    }
}
