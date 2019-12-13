<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('fichier');
            $table->timestamps();

            $table->integer('id_psychologues')->unsigned();
             $table->foreign('id_psychologues')
            ->references('id_psychologues')
            ->on('psychologues')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
