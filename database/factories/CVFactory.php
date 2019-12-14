<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CV;
use Faker\Generator as Faker;

$factory->define(CV::class, function (Faker $faker) {
    return [
        'titre' => $faker->jobTitle,
        'domaine' => $faker->company,
        'dateCreation' => $faker->date,
        'competance' => $faker->catchPhrase,
        'experience' => $faker->catchPhrase,
        'langue' => $faker->catchPhrase,
        'niveau' => $faker->catchPhrase,
        'formationUni' => $faker->catchPhrase,
        'fichier' => $faker->imageUrl,
        'created_at' => now(),
        'updated_at' => now(),
        //
    ];
});
