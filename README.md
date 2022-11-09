Table of contents
=================
<!--ts-->
   * [Table of contents](#table-of-contents)
   * [E-Sign BSrE](#e-sign-bsre)
      * [Instalisasi](#instalisasi)
      * [Penggunaan](#penggunaan)
        * [Konfigurasi](#konfigurasi)
        * [Kode](#kode)
      * [Changelog](#changelog)
      * [Contributing](#contributing)
      * [Keamanan](#keamanan)
      * [Credits](#credits)
      * [License](#license)
<!--te-->

# E-Sign BSrE

[![Latest Version on Packagist](https://img.shields.io/packagist/v/diskominfotik-banda-aceh/e-sign-bsre-laravel.svg?style=flat-square)](https://packagist.org/packages/diskominfotik-banda-aceh/e-sign-bsre-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/diskominfotik-banda-aceh/e-sign-bsre-laravel.svg?style=flat-square)](https://packagist.org/packages/diskominfotik-banda-aceh/e-sign-bsre-laravel)
<!--![GitHub Actions](https://github.com/diskominfotik-banda-aceh/e-sign-bsre-laravel/actions/workflows/main.yml/badge.svg)-->

[E-Sign BSrE](https://bsre.bssn.go.id/) adalah package untuk memudahkan penggunaan API E-Sign dari BSSN dengan bahasa PHP. Package ini digunakan untuk framework Laravel.

## Instalisasi

Anda bisa install package via composer:

```bash
composer require diskominfotik-banda-aceh/e-sign-bsre-laravel
```

## Penggunaan

### Konfigurasi
Copy dan paste konfigurasi ini ke dalam file `.env`
```php
TTE_URL="esign.example.go.id"
TTE_USERNAME="username"
TTE_PASSWORD="password"
```

### Kode
Kode yang disediakan ada beberapa yaitu tanda tangan digital invisible, verifikasi tanda tangan digital dan tanda tangan visible (soon)

- **Tanda tangan digital invisible**
```php
$esign = ESignBSrE::signInvisible($nik, $passphrase, $file, $filename);
$esign->getStatus(); //Get status response (int)
$esign->getErrors(); //Get error response
$esign->getData(); //Get data as blob pdf
```

- **Verifikasi tanda tangan digital**
```php
$esign = ESignBSrE::signVerification($file, $fileName);
$esign->getStatus(); //Get status response (int)
$esign->getErrors(); //Get error response
$esign->getData(); //Get data as array (tergantung dari API BSrE)
```

<!--### Testing

```bash
composer test
```
-->

### Changelog

Lihat [CHANGELOG](CHANGELOG.md) untuk informasi lebih lanjut terkait perubahan terbaru.

## Contributing

Lihat [CONTRIBUTING](CONTRIBUTING.md) untuk lebih detailnya.

### Keamanan

Jika anda menemukan masalah kerentanan keamanan pada package, tolong email ke diskominfotikbna[at]gmail.com

## Credits

-   [Maulidan Nashuha](https://github.com/maulidandev)
-   [Rayhan Yulanda](https://github.com/RayhanYulanda)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
