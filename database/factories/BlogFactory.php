<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'fichier' => $faker->text,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});