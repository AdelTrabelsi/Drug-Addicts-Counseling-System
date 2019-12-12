<?php

use Faker\Generator as Faker;

$factory->define(App\Discussion::class, function (Faker $faker) {
    return [
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
