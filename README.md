<p align="center"><img src="/logo.svg" title="Laravel Mandrill Driver" alt="Logo Laravel Mandrill Driver"></p>

<p align="center">
  <a href="https://github.com/intonate/laravel-mandrill-driver/actions/workflows/phpunit.yml?query=workflow:PHPUnit"><img src="https://github.com/intonate/laravel-mandrill-driver/workflows/PHPUnit/badge.svg" alt="PHPUnit" /></a>
  <a href="https://styleci.io/repos/209204562"><img src="https://github.styleci.io/repos/209204562/shield?style=flat" alt="StyleCI" /></a>
  <a href="https://packagist.org/packages/intonate/laravel-mandrill-driver"><img src="https://img.shields.io/packagist/dt/intonate/laravel-mandrill-driver.svg" alt="Total Downloads" /></a>
  <a href="https://packagist.org/packages/intonate/laravel-mandrill-driver"><img src="https://img.shields.io/packagist/v/intonate/laravel-mandrill-driver.svg?label=stable" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/intonate/laravel-mandrill-driver"><img src="https://img.shields.io/packagist/l/intonate/laravel-mandrill-driver.svg" alt="License" /></a>
</p>

The missing Mandrill API based mail driver for Laravel

> [!NOTE]
> This is a *community project* and **not** an official Laravel package

## Versions

Laravel  | Install
-------- | ------
 11.x    | `^4.0`
 10.x    | `^3.1`
 9.x     | `^3.0`
 8.x     | `^2.0`
 7.x     | `^1.2`
 6.x     | `^1.0`

## Installation Guide for Laravel 8, 9, 10 & 11

1. Install the Package via Composer

Run the following command in your terminal to install the package using Composer:
```sh
composer require intonate/laravel-mandrill-driver
```

2. Configure Environment Variables

Update your `.env` file with the following environment variables:
```dotenv
MAIL_MAILER=mandrill
MANDRILL_SECRET=YourMandrillAPIKey
```

3. Update Service Configuration

Open your `config/services.php` file and add the Mandrill configuration to it:
```php
'mandrill' => [
    'secret' => env('MANDRILL_SECRET'),
],
```

4. Configure Mail Driver

In your `config/mail.php` file, add the Mandrill mailer configuration to the "mailers" array:
```diff
'mailers' => [
+    'mandrill' => [
+        'transport' => 'mandrill',
+    ],
],
```

## Installation Guide for Laravel 6 & 7

Follow these steps to configure the Mandrill mail driver for Laravel 6 and 7:

1. Configure Environment Variables

Update your `.env` file with the following environment variables:
```dotenv
MAIL_DRIVER=mandrill
MANDRILL_SECRET=YourMandrillAPIKey
```

2. Update Service Configuration

Open the `config/services.php` file and insert the Mandrill configuration:
```php
'mandrill' => [
    'secret' => env('MANDRILL_SECRET'),
],
```

## Credits

- [Jorge González](https://github.com/scrubmx)
- [Roberto Aguilar](https://github.com/roberto-aguilar)
- [All Contributors](../../contributors)

## License

This is an open-sourced software licensed under the [MIT license](LICENSE).
