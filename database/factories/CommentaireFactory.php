<?php

use Faker\Generator as Faker;

$factory->define(App\Commentaire::class, function (Faker $faker) {
    return [
        $table->longText('commentaire'),
        $table->date('dateHeure'),
        'created_at' => now(),
        'updated_at' => now(),
    ];
    
});
