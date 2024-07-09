<?php

namespace DistortedFusion\BladeColors;

use DistortedFusion\BladeColors\Palettes\Tailwind;

class ColorManager
{
    /**
     * Indicates if the default colors are enabled.
     */
    protected static bool $withDefaultColors = true;

    protected array $colors = [];

    /**
     * @param array<string, array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}|string> $colors
     */
    public function register(array $colors): static
    {
        $this->colors[] = $colors;

        return $this;
    }

    /**
     * @return array<string, array{50: string, 100: string, 200: string, 300: string, 400: string, 500: string, 600: string, 700: string, 800: string, 900: string, 950: string}>
     */
    public function getColors(): array
    {
        $colors = static::$withDefaultColors ? static::defaultColors() : [];

        foreach ($this->colors as $set) {
            foreach ($set as $name => $color) {
                $colors[$name] = $color;
            }
        }

        return $colors;
    }

    public function renderStyles(): string
    {
        $variables = [];

        foreach ($this->getColors() as $name => $shades) {
            foreach ($shades as $shade => $color) {
                $variables["{$name}-{$shade}"] = $color;
            }
        }

        return view('blade-colors::assets', [
            'colorVariables' => $variables,
        ])->render();
    }

    public static function defaultColors(): array
    {
        return [
            'danger' => Tailwind::RED,
            'gray' => Tailwind::ZINC,
            'info' => Tailwind::BLUE,
            'primary' => Tailwind::INDIGO,
            'success' => Tailwind::GREEN,
            'warning' => Tailwind::AMBER,
        ];
    }

    /**
     * Disable default colors.
     *
     * @param bool $state
     *
     * @return void
     */
    public static function disableDefaultColors(bool $state = true)
    {
        static::$withDefaultColors = ! $state;
    }
}
