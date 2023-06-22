<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departures_change');
            $table->string('breackdowns');
            $table->string('Incidents');
            $table->string('date');

            $table->integer('plantlines')->unsigned();
            $table->foreign('plantlines')->references('id')->
            on('plantlines')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_operators')->unsigned();
            $table->foreign('id_operators')->references('id')->
            on('operators')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('records');
    }
}
