# Blade Colors

[![Latest Version](https://img.shields.io/github/tag/distortedfusion/blade-colors.svg?style=flat-square)](https://github.com/distortedfusion/blade-colors/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/github/actions/workflow/status/distortedfusion/blade-colors/ci.yml?branch=master&style=flat-square)](https://github.com/distortedfusion/blade-colors/actions)

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

## Documentation

You will find full documentation on the dedicated [documentation](https://distortedfusion.com/docs/distortedfusion/blade-colors) site.

## Testing

To run the tests, run the following command from the project folder:

``` bash
composer test
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Kevin Dierkx via kevin@distortedfusion.com. All security vulnerabilities will be promptly addressed.

## Contributing

Contributions are welcome and will be [fully credited](https://github.com/distortedfusion/blade-colors/graphs/contributors). Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
