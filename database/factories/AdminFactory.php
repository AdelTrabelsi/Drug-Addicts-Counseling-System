<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        'login' => $faker->userName,
        'mdp'=> $faker->password,
        'created_at' => now(),
        'updated_at' => now(),
      ];
});
