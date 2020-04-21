<?php

/** @var Factory $factory */

use App\Series;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Series::class, function (Faker $faker) {
    return [
        'title'=>$faker->colorName,
        'description'=>$faker->paragraph,
    ];
});
