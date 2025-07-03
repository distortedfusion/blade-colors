<?php

namespace DistortedFusion\BladeColors\Enums;

enum ThemeVariant
{
    case LIGHT;
    case DARK;

    public function selector(): ?string
    {
        return match ($this) {
            self::DARK => '.dark, .inverse *',
            default => ':root, .dark .inverse *',
        };
    }
}
