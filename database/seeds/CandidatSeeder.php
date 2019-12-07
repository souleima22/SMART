<?php

use Illuminate\Database\Seeder;
use App\Models\Candidat;
class CandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Candidat::class, 10)->create();
    }
}
