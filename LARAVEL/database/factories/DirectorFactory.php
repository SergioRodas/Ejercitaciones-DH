<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Director;
use Faker\Generator as Faker;

$factory->define(Director::class, function (Faker $faker) {
    return [
      'first_name' => $faker->firstName,
      'last_name' => $faker->lastName,
      'birthday' => $faker->dateTimeBetween($startDate = '-100 years', $endDate = '-18', $timezone = null), // '1979-06-09',
    ];

});
