# Usage

Out of the box Blade Colors comes with a set of predefined [Tailwind CSS](https://tailwindcss.com/docs/customizing-colors) based color palettes and default color definitions like `primary`, `warning` and `danger` utilizing these palettes.

## Default Colors

By default Blade Colors comes with 6 predefined color definitions using the provided [Tailwind](https://github.com/distortedfusion/blade-colors/blob/master/src/Palettes/Tailwind.php) color palettes.

```blade-component-code
    <div class="space-y-2">
        <x-description>
            <x-slot:title>
                Primary
            </x-slot:title>
            <div class="grid grid-cols-11 gap-2">
                <div class="bg-[rgb(var(--primary-50))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-100))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-200))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-300))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-400))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-500))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-600))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-700))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-800))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-900))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--primary-950))] aspect-square rounded"></div>
            </div>
        </x-description>
        <x-description>
            <x-slot:title>
                Gray
            </x-slot:title>
            <div class="grid grid-cols-11 gap-2">
                <div class="bg-[rgb(var(--gray-50))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-100))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-200))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-300))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-400))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-500))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-600))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-700))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-800))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-900))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--gray-950))] aspect-square rounded"></div>
            </div>
        </x-description>
        <x-description>
            <x-slot:title>
                Success
            </x-slot:title>
            <div class="grid grid-cols-11 gap-2">
                <div class="bg-[rgb(var(--success-50))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-100))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-200))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-300))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-400))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-500))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-600))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-700))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-800))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-900))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--success-950))] aspect-square rounded"></div>
            </div>
        </x-description>
        <x-description>
            <x-slot:title>
                Info
            </x-slot:title>
            <div class="grid grid-cols-11 gap-2">
                <div class="bg-[rgb(var(--info-50))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-100))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-200))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-300))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-400))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-500))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-600))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-700))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-800))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-900))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--info-950))] aspect-square rounded"></div>
            </div>
        </x-description>
        <x-description>
            <x-slot:title>
                Warning
            </x-slot:title>
            <div class="grid grid-cols-11 gap-2">
                <div class="bg-[rgb(var(--warning-50))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-100))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-200))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-300))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-400))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-500))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-600))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-700))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-800))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-900))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--warning-950))] aspect-square rounded"></div>
            </div>
        </x-description>
        <x-description>
            <x-slot:title>
                Danger
            </x-slot:title>
            <div class="grid grid-cols-11 gap-2">
                <div class="bg-[rgb(var(--danger-50))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-100))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-200))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-300))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-400))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-500))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-600))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-700))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-800))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-900))] aspect-square rounded"></div>
                <div class="bg-[rgb(var(--danger-950))] aspect-square rounded"></div>
            </div>
        </x-description>
    </div>
```

## Using CSS Variables

All configured color definitions are included in the `@bladeColor` directive, which has been added to the `<head>` section [during installation](/docs/distortedfusion/blade-colors/getting-started), and are generated as CSS variables.

The generated CSS variables are a combination of their definition name and the available shade. For example the default `primary` color definition has shades ranging from 100 till 900 in increments of 100, including 50 and 950 as additional shades.

Similar to the [Tailwind CSS color palettes](https://tailwindcss.com/docs/customizing-colors), resulting in variable names like: `--primary-500`.

To use the generated CSS variables you simply supply them as ["Arbitrary Values"](https://tailwindcss.com/docs/adding-custom-styles#using-arbitrary-values):

```html
<div class="bg-[rgb(var(--primary-500))]"></div>
```

## Using CSS Classes

Optionally you can import the default color definitions in your existing `tailwind.config.js` file. This simplifies the usage by removing the need to supply the CSS variable as arbitrary values and instead offers the color definition as a CSS class like:

```html
<div class="bg-primary-500"></div>
```

To enable support for CSS classes you need to import the `tailwind.config.preset.js` in your existing `tailwind.config.js` file:

```js
import bladeColors from './vendor/distortedfusion/blade-colors/tailwind.config.preset'

export default {
    presets: [bladeColors],
    content: [],
    ...
}
```

**Please Note:** The preset only includes the default color definitions as listed under [Default Colors](/docs/distortedfusion/blade-colors/usage#default-colors).

To include custom colors or to use custom definition names you need to [extend the colors section](https://tailwindcss.com/docs/customizing-colors#adding-additional-colors) in your existing `tailwind.config.js` file:

```js
export default {
    theme: {
        extend: {
            colors: {
                brand: {
                    50: 'rgba(var(--brand-50), <alpha-value>)',
                    100: 'rgba(var(--brand-100), <alpha-value>)',
                    200: 'rgba(var(--brand-200), <alpha-value>)',
                    ...
                },
            }
        }
    }
}
```

## Customizing Colors Using Palettes

From a service provider's `boot()` method, or middleware, you can call the `BladeColor::register()` method. The `register()` method takes an array of color definitions which can be used to extend the available generated CSS variables or to replace a default color definitions' color palette.

```php
<?php

use DistortedFusion\BladeColors\Facades\BladeColor;
use DistortedFusion\BladeColors\Palettes\Tailwind;

BladeColor::register([
    'primary' => Tailwind::INDIGO,
    'gray' => Tailwind::ZINC,
    'success' => Tailwind::GREEN,
    'info' => Tailwind::BLUE,
    'warning' => Tailwind::AMBER,
    'danger' => Tailwind::RED,
]);
```

The provided [Tailwind](https://github.com/distortedfusion/blade-colors/blob/master/src/Palettes/Tailwind.php) color palettes comes with a variety of palettes based on the [Tailwind CSS](https://tailwindcss.com/docs/customizing-colors) colors.

If you would like to include all available color palettes, using their Tailwind CSS naming convention, you can register them all at once using the `Tailwind::all()` method:

```php
<?php

use DistortedFusion\BladeColors\Facades\BladeColor;
use DistortedFusion\BladeColors\Palettes\Tailwind;

BladeColor::register(Tailwind::all());
```

## Adding Custom Colors

Instead of using the provided [Tailwind](https://github.com/distortedfusion/blade-colors/blob/master/src/Palettes/Tailwind.php) color palettes, you can add your own colors by supplying a list of RGB values:

```php
<?php

use DistortedFusion\BladeColors\Facades\BladeColor;

BladeColor::register([
    'brand' => [
        50 => '254, 242, 242',
        100 => '254, 226, 226',
        200 => '254, 202, 202',
        300 => '252, 165, 165',
        400 => '248, 113, 113',
        500 => '239, 68, 68',
        600 => '220, 38, 38',
        700 => '185, 28, 28',
        800 => '153, 27, 27',
        900 => '127, 29, 29',
        950 => '69, 10, 10',
    ],
]);
```

## Disabling Default Colors

If you don't need any of the default color definitions, as listed under [Default Colors](/docs/distortedfusion/blade-colors/usage#default-colors), you can disable them by calling the `BladeColor::disableDefaultColors()` method from a service provider's `boot()` method, or middleware:

```php
<?php

use DistortedFusion\BladeColors\Facades\BladeColor;

BladeColor::disableDefaultColors();
```
