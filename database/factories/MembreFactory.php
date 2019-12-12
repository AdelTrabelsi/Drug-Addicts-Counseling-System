<?php

use Faker\Generator as Faker;

$factory->define(App\Membre::class, function (Faker $faker) {
    return [
        'nom' => $faker->lastName,
        'prenom' => $faker->firstName,
        'adresse' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'mdp'=> $faker->password,
        
        'tel' => $faker->randomNumber(8),
        'dateNais' => $faker->date,
        //'sexe' => $faker->randomElement(['Femme', 'Homme']),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});

