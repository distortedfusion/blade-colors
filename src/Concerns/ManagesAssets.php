<?php

namespace DistortedFusion\BladeColors\Concerns;

trait ManagesAssets
{
    public static function ddfsnStyles(): string
    {
        return "<?php echo \DistortedFusion\BladeColors\BladeColors::renderStyles() ?>";
    }

    public static function ddfsnScripts(): string
    {
        return '';
    }

    public static function renderStyles(): string
    {
        $variables = [];

        foreach (static::definitions() as $selector => $definitions) {
            foreach ($definitions as $name => $shades) {
                $variables[$selector] = [
                    ...isset($variables[$selector]) ? $variables[$selector] : [],
                    ...static::mapShades(name: $name, shades: $shades),
                ];
            }
        }

        return view('blade-colors::assets', [
            'groupedColorVariables' => $variables,
        ])->render();
    }
}
