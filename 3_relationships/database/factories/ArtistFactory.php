<?php

use Faker\Generator as Faker;

$factory->define(App\Artist::class, function (Faker $faker) {
    return [
        'category_id' => function() {
            return factory(App\Category::class)->create()->id;
        },
        'name'=> $faker->name,
        'description'=> $faker->paragraph
    ];
});
