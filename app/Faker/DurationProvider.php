<?php

namespace App\Faker;

use Faker\Provider\Base;

class DurationProvider extends Base
{
    public function duration(): string
    {
        return  rand(150, 300)."min";
    }
}
