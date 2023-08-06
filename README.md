# This is my package gastos-for-pos-plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cswni/gastos-for-pos-plugin.svg?style=flat-square)](https://packagist.org/packages/cswni/gastos-for-pos-plugin)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/cswni/gastos-for-pos-plugin/run-tests?label=tests)](https://github.com/cswni/gastos-for-pos-plugin/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/cswni/gastos-for-pos-plugin/Check%20&%20fix%20styling?label=code%20style)](https://github.com/cswni/gastos-for-pos-plugin/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cswni/gastos-for-pos-plugin.svg?style=flat-square)](https://packagist.org/packages/cswni/gastos-for-pos-plugin)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require cswni/gastos-for-pos-plugin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="gastos-for-pos-plugin-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="gastos-for-pos-plugin-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="gastos-for-pos-plugin-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$gastos-for-pos-plugin = new Cswni\GastosForPosPlugin();
echo $gastos-for-pos-plugin->echoPhrase('Hello, Cswni!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Carlos Andres Perez Ubeda](https://github.com/cswni)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
