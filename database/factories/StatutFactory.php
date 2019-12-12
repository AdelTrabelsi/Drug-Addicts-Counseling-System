<?php

use Faker\Generator as Faker;

$factory->define(App\Statut::class, function (Faker $faker) {
    return [
        'statut' => $faker->text,
        'dateHeure' => $faker->dateTime,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});