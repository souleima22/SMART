<?php

use Illuminate\Database\Seeder;
use App\Models\Administrateur;

class AdministrateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Administrateur::class, 50)->create();

    }
}
