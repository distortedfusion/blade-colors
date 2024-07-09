<?php

namespace DistortedFusion\BladeForms;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class BladeFormsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        if (! defined('DF_BC_PATH')) {
            define('DF_BC_PATH', realpath(__DIR__.'/../'));
        }
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->offerPublishing();
        $this->registerResources();
    }

    private function offerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                DF_BC_PATH.'/resources/views' => resource_path('views/vendor/blade-colors'),
            ], 'blade-colors-views');
        }
    }

    private function registerResources(): void
    {
        $this->loadViewsFrom(DF_BC_PATH.'/resources/views', 'blade-colors');
    }
}
