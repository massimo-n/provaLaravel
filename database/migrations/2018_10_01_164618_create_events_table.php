<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('titolo');
            $table->string('immagine');
            $table->string('descrizione');
            $table->float('prezzo');
            $table->string('stato'); //aperto chiuso in corso ecc
            $table->string('indirizzo');
            $table->integer('numero_posti_totali');
            $table->integer('numero_posti_disponibili');
//            $table->date('dataEventoInizio');
//            $table->date('dataEventoFine');
            $table->date('dataCreazione');
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
        Schema::dropIfExists('events');
    }
}
