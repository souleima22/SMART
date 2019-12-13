<?php

use Illuminate\Database\Seeder;

use App\Models\Candidat;
use App\Models\CV;
use App\Models\Administrateur;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CVSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(RecruteurSeeder::class);
        $this->call(AdministrateurSeeder::class);
        $this->call(OffreSeeder::class);
    }
}
