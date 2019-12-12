<?php

use Faker\Generator as Faker;

$factory->define(App\Psychologue::class, function (Faker $faker) {
    return [
        
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'adresseCabinet' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'mdp'=> $faker->password,
        
        'tel' => $faker->randomNumber(8),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
