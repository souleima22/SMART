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
            $table->date('datedenaissance');
            $table->string('etatCivil');
            $table->string('ville');
            $table->UnsignedBigInteger('mobile');
            $table->string('email');
            $table->string('niveauExperience');
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
        Schema::dropIfExists('candidats');
    }
}
