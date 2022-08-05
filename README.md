# E-Sign BSrE

[![Latest Version on Packagist](https://img.shields.io/packagist/v/diskominfotik-banda-aceh/e-sign-bsre.svg?style=flat-square)](https://packagist.org/packages/diskominfotik-banda-aceh/e-sign-bsre)
[![Total Downloads](https://img.shields.io/packagist/dt/diskominfotik-banda-aceh/e-sign-bsre.svg?style=flat-square)](https://packagist.org/packages/diskominfotik-banda-aceh/e-sign-bsre)
<!--![GitHub Actions](https://github.com/diskominfotik-banda-aceh/e-sign-bsre/actions/workflows/main.yml/badge.svg)-->

[E-Sign BSrE](https://bsre.bssn.go.id/) adalah package untuk memudahkan penggunaan API E-Sign dari BSSN dengan bahasa PHP

## Installation

You can install the package via composer:

```bash
composer require diskominfotik-banda-aceh/e-sign-bsre
```

## Usage

```php
ESignBSrE::signInvisible($nik, $passphrase, $file, $filename);
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email diskominfotikbna[at]gmail.com instead of using the issue tracker.

## Credits

-   [Maulidan Nashuha](https://github.com/maulidandev)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
