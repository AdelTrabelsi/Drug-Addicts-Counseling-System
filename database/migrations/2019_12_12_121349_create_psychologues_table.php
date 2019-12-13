<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychologuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychologues', function (Blueprint $table) {
            $table->increments('id_psychologues');
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresseCabinet');
            $table->string('email')->unique();
            $table->string('mdp');
            $table->unsignedBigInteger('tel');
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
        Schema::dropIfExists('psychologues');
    }
}
