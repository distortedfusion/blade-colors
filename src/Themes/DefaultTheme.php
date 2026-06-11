<?php

declare(strict_types=1);

namespace DistortedFusion\BladeColors\Themes;

use DistortedFusion\BladeColors\Contracts\ThemeContract;
use DistortedFusion\BladeColors\Enums\ThemeVariable;
use DistortedFusion\BladeColors\Enums\ThemeVariant;

class DefaultTheme implements ThemeContract
{
    /**
     * {@inheritDoc}
     */
    public static function bladeColorDefinitions(ThemeVariant $variant): array
    {
        return match ($variant) {
            ThemeVariant::DARK => static::darkColors(),
            ThemeVariant::LIGHT => static::lightColors(),
            default => [],
        };
    }

    private static function lightColors(): array
    {
        return [
            ThemeVariable::BACKGROUND->value => 'var(--color-white)',
            ThemeVariable::FOREGROUND->value => 'var(--color-neutral-900)',

            ThemeVariable::PRIMARY->value => 'var(--color-black)',
            ThemeVariable::PRIMARY_FOREGROUND->value => 'var(--color-white)',

            ThemeVariable::SECONDARY->value => 'var(--color-neutral-100)',
            ThemeVariable::SECONDARY_FOREGROUND->value => 'var(--foreground)',

            ThemeVariable::ACCENT->value => 'var(--secondary)',
            ThemeVariable::ACCENT_FOREGROUND->value => 'var(--secondary-foreground)',

            ThemeVariable::MUTED->value => 'var(--secondary)',
            ThemeVariable::MUTED_FOREGROUND->value => 'var(--color-neutral-600)',

            ThemeVariable::CARD->value => 'var(--background)',
            ThemeVariable::CARD_FOREGROUND->value => 'var(--foreground)',

            ThemeVariable::BORDER->value => 'color-mix(in oklab, var(--color-black) 20%, var(--background))',
            ThemeVariable::INPUT->value => 'var(--color-white)',
            ThemeVariable::RING->value => 'var(--primary)',

            ThemeVariable::SUCCESS->value => 'var(--color-green-500)',
            ThemeVariable::SUCCESS_FOREGROUND->value => 'var(--color-green-700)',
            ThemeVariable::INFO->value => 'var(--color-blue-500)',
            ThemeVariable::INFO_FOREGROUND->value => 'var(--color-blue-700)',
            ThemeVariable::WARNING->value => 'var(--color-amber-500)',
            ThemeVariable::WARNING_FOREGROUND->value => 'var(--color-amber-700)',
            ThemeVariable::DANGER->value => 'var(--color-red-500)',
            ThemeVariable::DANGER_FOREGROUND->value => 'var(--color-red-700)',

            ThemeVariable::RADIUS->value => '0.5rem',
            ThemeVariable::RADIUS_INNER->value => '0.375rem',
        ];
    }

    private static function darkColors(): array
    {
        return [
            ThemeVariable::BACKGROUND->value => 'var(--color-black)',
            ThemeVariable::FOREGROUND->value => 'var(--color-neutral-100)',

            ThemeVariable::PRIMARY->value => 'var(--color-white)',
            ThemeVariable::PRIMARY_FOREGROUND->value => 'var(--color-black)',

            ThemeVariable::SECONDARY->value => 'var(--color-neutral-900)',

            ThemeVariable::MUTED_FOREGROUND->value => 'var(--color-neutral-400)',

            ThemeVariable::CARD->value => 'var(--color-neutral-950)',

            ThemeVariable::BORDER->value => 'color-mix(in oklab, var(--color-white) 20%, var(--background))',
            ThemeVariable::INPUT->value => 'var(--border)',

            ThemeVariable::SUCCESS_FOREGROUND->value => 'var(--color-green-300)',
            ThemeVariable::INFO_FOREGROUND->value => 'var(--color-blue-300)',
            ThemeVariable::WARNING_FOREGROUND->value => 'var(--color-amber-300)',
            ThemeVariable::DANGER_FOREGROUND->value => 'var(--color-red-300)',
        ];
    }
}
