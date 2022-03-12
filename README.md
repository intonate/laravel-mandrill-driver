# Laravel Mandrill Driver

[![PHPUnit](https://github.com/intonate/laravel-mandrill-driver/workflows/PHPUnit/badge.svg)](https://github.com/intonate/laravel-mandrill-driver/actions?query=workflow:PHPUnit)
[![StyleCI](https://github.styleci.io/repos/209204562/shield?branch=master)](https://github.styleci.io/repos/209204562)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/intonate/laravel-mandrill-driver/blob/master/LICENSE)

## Introduction

**This is a community project and not an "official" one**

## Versions

Laravel | Install
------- | ------
 6.x    | `^1.0`
 7.x    | `^1.2`
 8.x    | `^2.0`
 9.x    | `^3.0`

## Laravel 8 & 9 Installation

First, require the package using composer:

```sh
composer require intonate/laravel-mandrill-driver
```

* Add the `MAIL_MAILER` and `MANDRILL_SECRET` environment variables:

```sh
MAIL_MAILER=mandrill
MANDRILL_SECRET=YourMandrillAPIKey
```

* Add mandrill config to the `config/services.php` file:

```php
'mandrill' => [
    'secret' => env('MANDRILL_SECRET'),
],
```

* Add mandrill option to the `config/mail.php` "mailers" array:

```php
'mandrill' => [
    'transport' => 'mandrill',
],
```

## Laravel 6 & 7 Installation

* Set the `MAIL_DRIVER=mandrill` and `MANDRILL_SECRET` environment variables.
* Add mandrill config to the `config/services.php` file:

```php
'mandrill' => [
    'secret' => env('MANDRILL_SECRET'),
],
```

## Credits

- [Jorge González](https://github.com/scrubmx)
- [All Contributors](../../contributors)

## License

This is an open-sourced software licensed under the [MIT license](LICENSE).
