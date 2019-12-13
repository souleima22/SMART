<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Candidat;
use App\Models\Administrateur;
use Faker\Generator as Faker;


$factory->define(Candidat::class, function (Faker $faker) {
    return [
        'titre'=> $faker->jobTitle,
        'nom'=> $faker->lastName,
        'prenom'=> $faker->firstName,
        'login' => $faker->unique()->userName,
        'mdp' => $faker->password,
        'adresse'=> $faker->address,
        'etatCivil'=> $faker->word,//?
        'ville'=>$faker->city,
        'mobile'=> $faker->e164PhoneNumber,
        'email'=> $faker->freeEmail,
        'niveauExperience'=> $faker->word,
        'datedenaissance' => $faker->date,
        'id_admin' => $faker->randomElement(Administrateur::pluck('id')->toArray()),
        'created_at' => now(),
        'updated_at' => now(),

    ];
});
