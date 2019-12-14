<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CV;
<<<<<<< HEAD
=======
=======


use App\CV;

>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
        //
    ];
});
