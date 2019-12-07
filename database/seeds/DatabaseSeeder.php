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
<<<<<<< HEAD
       
         $this->call(CandidatSeeder::class);
         $this->call(AdministrateurSeeder::class);
         $this->call(CVSeeder::class);
=======
        // $this->call(UsersTableSeeder::class);
      
        $this->call(RecruteurSeeder::class);
        $this->call(AdministrateurSeeder::class);
        $this->call(CandidatSeeder::class);
>>>>>>> 0adbaaca626a2e5cdd46c41d5c71bbf945925d08
    }
}
