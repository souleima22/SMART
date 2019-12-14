<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Offretable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->string('description');
            $table->string('titre');
            $table->string('lieu');
            $table->string('typeContrat');
            $table->unsignedBigInteger('id_recr');
            $table->double('salaire');
            $table->date('duree');
            $table->string('niveauPoste');
            $table->string('niveauEtude');
            $table->timestamps();
            $table->foreign('id_recr')->references('id')->on('recruteurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
