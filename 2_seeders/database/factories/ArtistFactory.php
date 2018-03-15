<?php

use Faker\Generator as Faker;


$factory->define(App\Artist::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween($min = 17, $max = 40),
        'description' => $faker->text($maxNbChars = 255),
        'agency' => $faker->company
    ];
});
