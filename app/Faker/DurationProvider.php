<?php

namespace App\Faker;

use Faker\Provider\Base;

class DurationProvider extends Base
{
    public function duration(): string
    {
        return  rand(1, 4). ":". rand(0 , 59);
    }
}
