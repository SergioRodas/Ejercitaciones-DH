<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Actor;
use Faker\Generator as Faker;

$factory->define(Actor::class, function (Faker $faker) {
    return [
      'first_name' => $faker->firstName,
      'last_name' => $faker->lastName,
      'rating' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 10), // 7.5
    ];
});
