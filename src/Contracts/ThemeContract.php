<?php

namespace DistortedFusion\BladeColors\Contracts;

use DistortedFusion\BladeColors\Enums\ThemeVariant;

interface ThemeContract
{
    /**
     * Get the `distortedfusion/blade-colors` variable definitions for the provided theme variant.
     *
     * @param ThemeVariant $variant
     *
     * @return array
     */
    public static function bladeColorDefinitions(ThemeVariant $variant): array;
}
