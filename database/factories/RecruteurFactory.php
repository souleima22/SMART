<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
use App\Models\Recruteur;
use Faker\Generator as Faker;

$factory->define(Recruteur::class, function (Faker $faker) {
<<<<<<< HEAD
    return [
        'login' => $faker->unique()->userName,
        'nom'=> $faker->lastName,
        'prenom'=> $faker->firstName,
=======
<<<<<<< HEAD
    return [
        //
=======
    return
        [
>>>>>>> offres
        'login'=> $faker->name,
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
        'mdp'=> $faker->password,
        'email'=> $faker->email,
        'siteweb'=> $faker->domainName ,
        'secteuractivite'=> $faker->name,
        'adresse'=> $faker->streetAddress,
        'mobile'=> $faker->e164PhoneNumber,
       // 'id_admin' => $faker->randomElement(Administrateur::pluck('id')->toArray()),
        'created_at' => now(),
        'updated_at' => now(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        

>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
    ];
});
