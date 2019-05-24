<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Filme;
use Faker\Generator as Faker;

$factory->define(Filme::class, function (Faker $faker) {
    return [
       'title' => $faker->name,
       'rating' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10), 
       'length' => $faker->numberBetween($min = 60, $max = 180),
       'release_date' => $faker->dateTimeThisDecade($max = 'now', $timezone=null)
    ];
});
