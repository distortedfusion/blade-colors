<?php

namespace DistortedFusion\BladeColors\Concerns;

use Closure;
use DistortedFusion\BladeColors\Contracts\ThemeContract;
use DistortedFusion\BladeColors\Enums\ThemeVariant;
use DistortedFusion\BladeColors\Exceptions\InvalidThemeException;
use DistortedFusion\BladeColors\Themes\DefaultTheme;

trait ManagesThemes
{
    /**
     * Indicates if the default theme should be registered.
     */
    protected static bool $withDefaultTheme = true;

    protected static string $defaultTheme = DefaultTheme::class;

    /**
     * Register a theme definition.
     *
     * @param string   $theme
     * @param ?Closure $selectorResolver
     *
     * @return static
     */
    public static function registerTheme(string $theme, ?Closure $selectorResolver = null): static
    {
        if (! in_array(ThemeContract::class, class_implements($theme))) {
            throw new InvalidThemeException();
        }

        foreach (ThemeVariant::cases() as $variant) {
            $definitions = $theme::bladeColorDefinitions(
                variant: $variant
            );

            if (! empty($definitions)) {
                $selector = ! is_null($selectorResolver)
                    ? $selectorResolver(theme: $theme, variant: $variant)
                    : $variant->selector();

                static::register(definitions: $definitions, selector: $selector);
            }
        }

        return new static();
    }

    /**
     * Get the default theme implementation.
     *
     * @return string|null
     */
    public static function defaultTheme(): ?string
    {
        return static::$withDefaultTheme ? static::$defaultTheme : null;
    }

    /**
     * Set the default theme implementation.
     *
     * @param string $theme
     *
     * @return void
     */
    public static function setDefaultTheme(string $theme): void
    {
        if (! in_array(ThemeContract::class, class_implements($theme))) {
            throw new InvalidThemeException();
        }

        static::$defaultTheme = $theme;
    }

    /**
     * Disable the default theme.
     *
     * @param bool $state
     *
     * @return void
     */
    public static function disableDefaultTheme(bool $state = true)
    {
        static::$withDefaultTheme = ! $state;
    }
}
