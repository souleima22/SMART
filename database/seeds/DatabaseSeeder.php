<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      
        $this->call(RecruteurSeeder::class);
        $this->call(AdministrateurSeeder::class);
        $this->call(CandidatSeeder::class);
    }
}
