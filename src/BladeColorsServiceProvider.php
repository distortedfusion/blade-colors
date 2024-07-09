<?php

namespace DistortedFusion\BladeColors;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class BladeColorsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        if (! defined('DF_BLADE_COLORS_PATH')) {
            define('DF_BLADE_COLORS_PATH', realpath(__DIR__.'/../'));
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
        $this->registerDirectives();
    }

    private function offerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                DF_BLADE_COLORS_PATH.'/resources/views' => resource_path('views/vendor/blade-colors'),
            ], 'blade-colors-views');
        }
    }

    private function registerResources(): void
    {
        $this->loadViewsFrom(DF_BLADE_COLORS_PATH.'/resources/views', 'blade-colors');
    }

    private function registerDirectives(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $blade->directive('bladeColor', function (): string {
                return "<?php echo \DistortedFusion\BladeColors\Facades\BladeColor::renderStyles() ?>";
            });
        });
    }
}
