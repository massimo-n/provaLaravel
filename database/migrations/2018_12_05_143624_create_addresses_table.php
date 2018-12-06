<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('denominazione'); //via,  piazza, pontò,
            // la denominazione urbanistica generica
            $table->string('indirizzo');
            $table->string('numero');
            $table->integer('cap');
            $table->string('citta');
            $table->string('regione');
            $table->string('stato');
            $table->string('latitudine');
            $table->string('longitudine');

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
        Schema::dropIfExists('addresses');
    }
}
