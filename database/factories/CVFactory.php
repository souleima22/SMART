<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD
use App\Models\CV;
=======
use App\CV;
>>>>>>> 0adbaaca626a2e5cdd46c41d5c71bbf945925d08
use Faker\Generator as Faker;

$factory->define(CV::class, function (Faker $faker) {
    return [
<<<<<<< HEAD
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
=======
        //
>>>>>>> 0adbaaca626a2e5cdd46c41d5c71bbf945925d08
    ];
});
