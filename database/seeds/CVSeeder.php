<?php

use Illuminate\Database\Seeder;
use App\Models\CV;

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
    }
}
