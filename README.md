# Detect and manage code issues with per-file logging

[![Latest Version on Packagist](https://img.shields.io/packagist/v/matakltm/laravel-code-detective.svg?style=flat-square)](https://packagist.org/packages/matakltm/laravel-code-detective)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/matakltm/laravel-code-detective/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/matakltm/laravel-code-detective/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/matakltm/laravel-code-detective/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/matakltm/laravel-code-detective/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/matakltm/laravel-code-detective.svg?style=flat-square)](https://packagist.org/packages/matakltm/laravel-code-detective)

Detect and manage code issues with per-file logging.

## Installation

You can install the package via composer:

```bash
composer require matakltm/laravel-code-detective
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-code-detective-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-code-detective-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-code-detective-views"
```

## Usage

```php
$codeDetective = new Matakltm\CodeDetective();
echo $codeDetective->echoPhrase('Hello, Matakltm!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Micheal Ataklt](https://github.com/matakltm-code)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
