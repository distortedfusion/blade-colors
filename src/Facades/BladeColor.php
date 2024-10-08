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

    /**
     * @param array<string, array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}|string> $colors
     */
    public static function register(array $colors): void
    {
        static::resolved(function (ColorManager $colorManager) use ($colors) {
            $colorManager->register($colors);
        });
    }
}
