<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantlines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('line');
            $table->string('cut_type');
            $table->string('speed');

            $table->integer('id_molds')->unsigned();
            $table->foreign('id_molds')->references('id')->
            on('molds')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('lines');
    }
}
