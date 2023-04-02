<?php

namespace Matakltm\CodeDetective\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Matakltm\CodeDetective\CodeDetectiveServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Matakltm\\CodeDetective\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            CodeDetectiveServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-code-detective_table.php.stub';
        $migration->up();
        */
    }
}
