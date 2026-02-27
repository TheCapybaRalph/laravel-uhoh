# Laravel Uh oh
Laravel Uhoh is a tiny integrity checker for your index.php.
It monitors the file and fires events if anything changes.

This is a friendly guard, not a security guard dog.
If someone can modify your application, they can modify Uhoh too.
Use it as a warning tool, not a defense system.

## Installation

You can install the package via composer:

```bash
composer require thecapybaralph/laravel-uhoh
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-uhoh-config"
```

## Usage

```php
$tripwire = \TheCapybaRalph\LaravelUhoh\Uhoh::run(); // returns true if check passes
```

You can also add this to your schedule
```php
\Illuminate\Support\Facades\Schedule::command('uhoh:check')->hourly();
```
## Creating a Listener
The package does not include built-in notifications by default.
However, it fires two events that you can listen to in your application:
```php
\TheCapybaRalph\LaravelUhoh\Events\IntegrityCheckFailed::class;
\TheCapybaRalph\LaravelUhoh\Events\IntegrityCheckPassed::class;
```
You can attach listeners to these events to perform any action you need when an integrity check passes or fails, such as sending notifications, logging, or triggering custom workflows.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Credits

- [TheCapybaRalph](https://github.com/TheCapybaRalph)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
