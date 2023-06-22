<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('required_quantity');
            $table->string('date');

            $table->integer('id_clients')->unsigned();
            $table->foreign('id_clients')->references('id')->
            on('clients')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_departures')->unsigned();
            $table->foreign('id_departures')->references('id')->
            on('departures')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('orders');
    }
}
