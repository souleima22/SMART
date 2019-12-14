<?php

use Illuminate\Database\Seeder;

use App\Models\Candidat;
use App\Models\CV;
use App\Models\Administrateur;
use App\Models\Offre;
use App\Models\Recruteur;
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
