<?php

use Illuminate\Database\Seeder;
use App\Models\Recruteur;
class RecruteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Recruteur::class, 50)->create();
    }
}
