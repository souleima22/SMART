<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Administrateur;
use Faker\Generator as Faker;

$factory->define(Administrateur::class, function (Faker $faker) {
    return [
        'login'=> $faker->userName,
<<<<<<< HEAD
        'password'=> $faker->password ,
        'created_at' => now(),
        'updated_at' => now(),
=======
<<<<<<< HEAD
        'password'=> $faker->password ,
        'created_at' => now(),
        'updated_at' => now(),
=======
        'password'=> $faker->password,
        'email'=>$faker->email,
        'created_at' => now(),
        'updated_at' => now(),
        //
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
    ];
});
