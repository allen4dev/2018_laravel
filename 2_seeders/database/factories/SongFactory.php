<?php

use Faker\Generator as Faker;

$factory->define(App\Song::class, function (Faker $faker) {
    return [
        'category_id' => function() {
            return factory(App\Category::class)->create()->id;
        },
        'artist_id' => function() {
            return factory(App\Artist::class)->create()->id;
        },
        'name' => $faker->name
    ];
});
