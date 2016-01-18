<?php

namespace DraperStudio\Taggable;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    protected $packageName = 'taggable';

    public function register()
    {
        $this->setup(__DIR__)
             ->publishMigrations()
             ->publishConfig()
             ->mergeConfig('taggable');
    }
}
