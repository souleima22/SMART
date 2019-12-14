<?php

use Illuminate\Database\Seeder;
use App\Models\Administrateur;

<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
class AdministrateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Administrateur::class, 3)->create();
<<<<<<< HEAD
=======
=======

        factory(Administrateur::class, 50)->create();

>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
    }
}
