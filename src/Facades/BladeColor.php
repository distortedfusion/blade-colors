<?php

namespace DistortedFusion\BladeColors\Facades;

use DistortedFusion\BladeColors\ColorManager;
use Illuminate\Support\Facades\Facade;

class BladeColor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ColorManager::class;
    }

    public static function register(array $colors, ?string $theme = null): void
    {
        static::resolved(function (ColorManager $colorManager) use ($colors, $theme) {
            $colorManager->register(colors: $colors, theme: $theme);
        });
    }
}
