<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Recruteur;
use Faker\Generator as Faker;

$factory->define(Recruteur::class, function (Faker $faker) {
    return [
        //
        'login'=> $faker->name,
        'mdp'=> $faker->password,
        'email'=> $faker->email,
        'siteweb'=> $faker->domainName ,
        'secteuractivite'=> $faker->name,
        'adresse'=> $faker->streetAddress,
        'telephone'=> $faker->e164PhoneNumber,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
