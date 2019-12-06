<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruteurs', function (Blueprint $table) {
            $table->Increments('id');
            $table->timestamps();
            $table->string('login');
            $table->string('mdp');
            $table->string('email');
            $table->string('siteweb');
            $table->string('secteuractivite');
            $table->string('adresse');
            $table->UnsignedBigInteger('telephone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruteurs');
    }
}