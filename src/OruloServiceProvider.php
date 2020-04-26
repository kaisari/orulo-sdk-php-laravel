<?php

namespace Jetimob\Orulo;

use Illuminate\Support\ServiceProvider;
use Jetimob\Orulo\Console\InstallOruloPackage;

class OruloServiceProvider extends ServiceProvider
{
    private function getConfigPath(): string
    {
        return sprintf('%s/../config/config.php', __DIR__);
    }

    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'orulo');

        $this->app->bind('orulo', function ($app) {
            return new Orulo($app->config->get('orulo'));
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->getConfigPath() => config_path('orulo.php')
            ], 'config');

            $this->commands([
                InstallOruloPackage::class,
            ]);
        }
    }
}