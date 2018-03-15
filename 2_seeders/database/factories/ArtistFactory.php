<?php

use Faker\Generator as Faker;

use App\Artist;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => $faker->numberBetween($min = 17, $max = 40),
        'description' => $faker->paragraph,
        'agency' => $faker->company
    ];
});
