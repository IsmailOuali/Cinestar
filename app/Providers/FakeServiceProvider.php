<?php

namespace App\Providers;

use App\Faker\DurationProvider;
use Carbon\Laravel\ServiceProvider;
use Faker\{Factory, Generator};

class FakeServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(Generator::class, function () {
            $faker = Factory::create();
            $faker->addProvider(new DurationProvider($faker));
            return $faker;
        });
    }
}
