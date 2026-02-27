<?php

namespace TheCapybaRalph\LaravelUhoh;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TheCapybaRalph\LaravelUhoh\Commands\UhohCommand;

class UhohServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-uhoh')
            ->hasConfigFile()
            ->hasCommand(UhohCommand::class);
    }
}
