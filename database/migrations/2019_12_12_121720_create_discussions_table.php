<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::disableForeignKeyConstraints();
        Schema::create('discussions', function (Blueprint $table) {
            $table->increments('id_discussion');
            $table->timestamps();

            $table->integer('idmembre')->unsigned();
             $table->foreign('idmembre')
            ->references('idmembre')
            ->on('membres')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            

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
        Schema::dropIfExists('discussions');
    }
}
