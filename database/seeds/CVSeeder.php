<?php

use Illuminate\Database\Seeder;
use App\Models\CV;
<<<<<<< HEAD

=======

=======

use App\CV;



>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
class CVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CV::class, 10)->create();
        //
<<<<<<< HEAD
=======
=======

        factory(CV::class, 10)->create();

        

>>>>>>> offres
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
    }
}
