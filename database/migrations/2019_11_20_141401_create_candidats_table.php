<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('nom');
            $table->string('prenom');
            $table->string('login');
            $table->string('mdp');
            $table->string('adresse');
            $table->unsignedBigInteger('id_admin');
            $table->date('datedenaissance');
            $table->string('etatCivil');
            $table->string('ville');
            $table->UnsignedBigInteger('mobile');
            $table->string('email');
            $table->string('niveauExperience');
            $table->timestamps();
<<<<<<< HEAD
            $table->foreign('id_admin')->references('id')->on('administrateurs');
=======
            $table->foreign('id_admin')->references('id')->on('administrateurs')->onDelete('cascade');
>>>>>>> bb5165a40cb2eff3edc58924830a6b6c30dbf5ce
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}
