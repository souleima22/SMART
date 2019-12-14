<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('login');
<<<<<<< HEAD:database/migrations/2019_11_20_141047_create_administrateurs_table.php
            $table->string('password');
=======
<<<<<<< HEAD:database/migrations/2019_11_20_141047_create_administrateurs_table.php
            $table->string('password');
=======
            $table->string('mdp');
            $table->string('email');
            $table->string('siteweb');
            $table->string('secteurActivite');
            $table->string('adresse');
            $table->UnsignedBigInteger('telephone');
>>>>>>> offres:database/migrations/2019_11_20_144043_create_recruteurs_table.php
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce:database/migrations/2019_11_20_141047_create_administrateurs_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
}
