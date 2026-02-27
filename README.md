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

This is the contents of the published config file:

```php
return [
    'enabled' => env("UHOH_ENABLED", "true"),

    'index_file_path' => env("UHOH_INDEX_FILE_PATH"), // defaults to public_path('index.php')
    
    'checksums' => [
        // versions 10, 11 ,12 already included
    ]
];

```

## Usage

```php
$tripwire = \TheCapybaRalph\LaravelUhoh\Uhoh::run(); // returns true if check passes
```

You can also add this to your schedule
```php
\Illuminate\Support\Facades\Schedule::command('uhoh:check')->hourly();
```

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
