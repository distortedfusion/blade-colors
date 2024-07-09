# Getting Started

Blade Colors offers [Tailwind CSS](https://tailwindcss.com/) compatible, CSS variable based, color palettes. Color definitions can be configured dynamically during runtime using the provided [color manager](/docs/distortedfusion/blade-colors/usage).

```php
<?php

use DistortedFusion\BladeColors\Facades\BladeColor;
use DistortedFusion\BladeColors\Palettes\Tailwind;

BladeColor::register(['primary' => Tailwind::INDIGO]);
?>

<!-- Applied directly using a CSS variable -->
<div class="bg-[rgb(var(--primary-500))]"></div>

<!-- Or with the optional additional presets -->
<div class="bg-primary-500"></div>
```

## Installation

Require the Blade Colors package using Composer:

```bash
composer require distortedfusion/blade-colors
```

After installation the CSS variables need to be added to your main application layout. This is done by adding the `@bladeColor` directive to your layouts `<head>` section:

```html
<html>
<head>
    <title>DDFSN</title>

    @bladeColor
</head>
    <body>
    </body>
</html>
```

The `@bladeColor` directive will inject a dynamically generated `<style>` element containing all the configured colors:

```html
<style>:root { --primary-50: 238, 242, 255; ... }</style>
```

## Version Compatibility

| Laravel | PHP            | Package |
| ------- | -------------- | ------- |
| 9.x     | ^8.0           | >= 1.0  |
| 10.x    | ^8.1           | >= 1.0  |
| 11.x    | ^8.2           | >= 1.0  |

*Only the currently supported PHP versions are listed. Please [refer to previous releases of this package](https://github.com/distortedfusion/blade-colors/tags) for support for older PHP or Laravel versions.*
