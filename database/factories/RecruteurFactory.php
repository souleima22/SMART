<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD
use App\Recruteur;
=======
use App\Models\Recruteur;
>>>>>>> 0adbaaca626a2e5cdd46c41d5c71bbf945925d08
use Faker\Generator as Faker;

$factory->define(Recruteur::class, function (Faker $faker) {
    return [
<<<<<<< HEAD
        //
=======
        'login'=> $faker->name,
        'mdp'=> $faker->password,
        'email'=> $faker->email,
        'siteweb'=> $faker->domainName ,
        'secteuractivite'=> $faker->name,
        'adresse'=> $faker->streetAddress,
        'telephone'=> $faker->e164PhoneNumber,
        'created_at' => now(),
        'updated_at' => now(),
>>>>>>> 0adbaaca626a2e5cdd46c41d5c71bbf945925d08
    ];
});
