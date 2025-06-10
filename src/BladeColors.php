<?php

namespace DistortedFusion\BladeColors;

use DistortedFusion\BladeColors\Concerns\ManagesAssets;
use DistortedFusion\BladeColors\Concerns\ManagesThemes;

class BladeColors
{
    use ManagesAssets;
    use ManagesThemes;

    protected static array $definitions = [];

    public static function register(array $definitions, ?string $selector = null): static
    {
        $selector = is_null($selector) ? ':root' : $selector;

        static::$definitions[$selector] = [
            ...isset(static::$definitions[$selector]) ? static::$definitions[$selector] : [],
            ...$definitions,
        ];

        return new static();
    }

    public static function definitions(): array
    {
        if (static::$withDefaultTheme) {
            static::registerTheme(static::defaultTheme());
        }

        $definitions = [];

        foreach (static::$definitions as $selector => $set) {
            foreach ($set as $name => $color) {
                $definitions[$selector] = [
                    ...isset($definitions[$selector]) ? $definitions[$selector] : [],
                    $name => $color,
                ];
            }
        }

        return $definitions;
    }

    private static function mapShades(string $name, array|string $shades): array
    {
        if (static::emptyShades($shades)) {
            return [];
        }

        if (is_string($shades)) {
            return ["{$name}" => $shades];
        }

        $variables = [];

        foreach ($shades as $shade => $color) {
            if (! is_null($color)) {
                $variables["{$name}-{$shade}"] = $color;
            }
        }

        return $variables;
    }

    private static function emptyShades(array|string $shades): bool
    {
        if (is_string($shades) && trim($shades) === '') {
            return true;
        }

        if (is_array($shades) && empty(array_filter($shades))) {
            return true;
        }

        return false;
    }
}
