<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offre;
use Faker\Generator as Faker;

$factory->define(Offre::class, function (Faker $faker) {
    return [
        'reference'=> $faker->word ,
        'description'=> $faker->word ,
        'titre'=> $faker->word ,
        'lieu'=> $faker->address ,
        'typeContrat'=>$faker->word,
        'salaire'=> $faker->randomFloat,
        'duree'=> $faker->dateTime,
        'niveauPoste'=>$faker->numberBetween($min = 0, $max = 15),
        'niveauEtude'=> $faker->numberBetween($min = 0, $max = 15),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
