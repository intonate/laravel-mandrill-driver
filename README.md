# Laravel Mandrill Driver

[![TravisCI](https://img.shields.io/travis/intonate/laravel-mandrill-driver/master.svg?style=flat-square)](https://travis-ci.org/intonate/laravel-mandrill-driver)
[![StyleCI](https://github.styleci.io/repos/209204562/shield?branch=master)](https://github.styleci.io/repos/209204562)
[![ScrutinizerCI](https://img.shields.io/scrutinizer/g/intonate/laravel-mandrill-driver.svg?style=flat-square)](https://scrutinizer-ci.com/g/intonate/laravel-mandrill-driver)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://github.com/intonate/laravel-mandrill-driver/blob/master/LICENSE)

## Introduction

**This is a community project and not an "official" one**

## Installation

First, require the package using composer:

```sh
composer require intonate/laravel-mandrill-driver
```

To use the Mandrill driver, set the `MAIL_DRIVER` environment variable to "mandrill". Next, update the `config/services.php` configuration file to include the following options:

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
