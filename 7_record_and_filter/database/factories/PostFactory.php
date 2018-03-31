<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 3, $asText = true),
        'body' => $faker->text,
        'likes' => $faker->numberBetween($min = 1, $max = 100),
        'category' => $faker->randomElement(['laravel', 'react'])
        ,
    ];
});
