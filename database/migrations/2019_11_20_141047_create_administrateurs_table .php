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
            $table->bigIncrements('id_admin');
            $table->string('login');
<<<<<<< HEAD:database/migrations/2019_11_23_052005_create_recruteurs_table.php
            $table->string('nom');
            $table->string('prenom');
            $table->string('mdp');
            $table->string('email');
            $table->string('siteweb');
            $table->string('secteuractivite');
            $table->string('adresse');
            $table->UnsignedBigInteger('mobile');
            //$table->foreign('id_admin')->references('id')->on('administrateurs');

=======
            $table->string('password');
            $table->string('email');
            $table->timestamps();
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce:database/migrations/2019_11_20_141047_create_administrateurs_table .php
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
