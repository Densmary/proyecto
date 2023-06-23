<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeparturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('n_units');
            $table->string('manufacturing_order');
            $table->string('production_cost');
            $table->string('id_orders');
            $table->integer('id_plantlines')->unsigned();
            $table->foreign('id_plantlines')->references('id')->
            on('plantlines')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_products')->unsigned();
            $table->foreign('id_products')->references('id')->
            on('products')->onDelete('cascade')->onUpdate('cascade');

         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departures');
    }
}
