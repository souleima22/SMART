<?php

use Illuminate\Database\Seeder;
use App\Offre;
class OffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Offre::class, 50)->create();
     
    }
}
// zefzef
// zefzefzef