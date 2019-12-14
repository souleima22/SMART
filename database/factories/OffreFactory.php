<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD
use App\Models\Offre;
=======
<<<<<<< HEAD
use App\Models\Offre;
=======
use App\Offre;
use App\Models\Recruteur;
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
use Faker\Generator as Faker;

$factory->define(Offre::class, function (Faker $faker) {
    return [
        'reference'=> $faker->word ,
        'description'=> $faker->word ,
<<<<<<< HEAD
        'titre'=> $faker->word,
        'lieu'=> $faker->address,
=======
<<<<<<< HEAD
        'titre'=> $faker->word,
        'lieu'=> $faker->address,
=======
        'titre'=> $faker->word ,
        'lieu'=> $faker->address ,
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
        'typeContrat'=>$faker->word,
        'salaire'=> $faker->randomFloat,
        'duree'=> $faker->dateTime,
        'niveauPoste'=>$faker->numberBetween($min = 0, $max = 15),
        'niveauEtude'=> $faker->numberBetween($min = 0, $max = 15),
        'id_recr' => $faker->randomElement(Recruteur::pluck('id')->toArray()),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
