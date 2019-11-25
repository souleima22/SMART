<?php
use App\Administrateur;
use Illuminate\Database\Seeder;

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
