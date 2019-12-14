<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Administrateur;
use Faker\Generator as Faker;

$factory->define(Administrateur::class, function (Faker $faker) {
    return [
        'login'=> $faker->userName,
        'password'=> $faker->password ,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
