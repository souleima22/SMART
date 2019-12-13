<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Recruteur;
use Faker\Generator as Faker;

$factory->define(Recruteur::class, function (Faker $faker) {
    return [
        'login' => $faker->unique()->userName,
        'nom'=> $faker->lastName,
        'prenom'=> $faker->firstName,
        'mdp'=> $faker->password,
        'email'=> $faker->email,
        'siteweb'=> $faker->domainName ,
        'secteuractivite'=> $faker->name,
        'adresse'=> $faker->streetAddress,
        'mobile'=> $faker->e164PhoneNumber,
       // 'id_admin' => $faker->randomElement(Administrateur::pluck('id')->toArray()),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
