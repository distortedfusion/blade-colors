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

    public function register(array $colors, ?string $theme = null): static
    {
        $theme = is_null($theme) ? 'root' : $theme;

        $this->colors[$theme] = [
            ...isset($this->colors[$theme]) ? $this->colors[$theme] : [],
            ...$colors,
        ];

        return $this;
    }

    public function getColors(): array
    {
        $colors = static::$withDefaultColors
            ? static::defaultColors()
            : [];

        foreach ($this->colors as $theme => $set) {
            foreach ($set as $name => $color) {
                $colors[$theme] = [
                    ...isset($colors[$theme]) ? $colors[$theme] : [],
                    $name => $color,
                ];
            }
        }

        return $colors;
    }

    public function renderStyles(): string
    {
        $variables = [];

        foreach ($this->getColors() as $theme => $colors) {
            foreach ($colors as $name => $shades) {
                $variables[$theme] = [
                    ...isset($variables[$theme]) ? $variables[$theme] : [],
                    ...$this->mapShades(name: $name, shades: $shades),
                ];
            }
        }

        return view('blade-colors::assets', [
            'groupedColorVariables' => $variables,
        ])->render();
    }

    private function mapShades(string $name, array|string $shades): array
    {
        if (is_array($shades)) {
            $variables = [];

            foreach ($shades as $shade => $color) {
                if (! is_null($color) && ! empty($color)) {
                    $variables["{$name}-{$shade}"] = $color;
                }
            }

            return $variables;
        }

        if (is_null($shades) || empty($shades)) {
            return [];
        }

        return ["{$name}" => $shades];
    }

    public static function defaultColors(): array
    {
        return [
            'root' => [
                'danger' => Tailwind::RED,
                'gray' => Tailwind::ZINC,
                'info' => Tailwind::BLUE,
                'primary' => Tailwind::INDIGO,
                'success' => Tailwind::GREEN,
                'warning' => Tailwind::AMBER,
            ],
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
