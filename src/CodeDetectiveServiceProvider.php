<?php

namespace Matakltm\CodeDetective;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Matakltm\CodeDetective\Commands\CodeDetectiveCommand;

class CodeDetectiveServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/matakltm/laravel-code-detective
         */
        $package
            ->name('laravel-code-detective')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-code-detective_table')
            ->hasCommand(CodeDetectiveCommand::class);
    }
}
