# This is my package google-drive-uploader

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mhdeveloperys/google-drive-uploader.svg?style=flat-square)](https://packagist.org/packages/mhdeveloperys/google-drive-uploader)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/mhdeveloperys/google-drive-uploader/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/mhdeveloperys/google-drive-uploader/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/mhdeveloperys/google-drive-uploader/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/mhdeveloperys/google-drive-uploader/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mhdeveloperys/google-drive-uploader.svg?style=flat-square)](https://packagist.org/packages/mhdeveloperys/google-drive-uploader)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require mhdeveloperys/google-drive-uploader
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="google-drive-uploader-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="google-drive-uploader-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="google-drive-uploader-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$googleDriveUploader = new MhdeveloperYs\GoogleDriveUploader();
echo $googleDriveUploader->echoPhrase('Hello, MhdeveloperYs!');
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

- [MHDeveloper](https://github.com/mhdeveloperYs)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
