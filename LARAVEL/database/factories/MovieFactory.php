<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
      'title' => $faker->word,
      'awards' => $faker->numberBetween(0, 10),
      'release_date' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
      'length' => $faker->numberBetween(90, 350),
      'revenue' => $faker->numberBetween(0,2000000000),
    ];
});
