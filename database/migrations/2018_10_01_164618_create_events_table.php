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
            $table->integer('address_id')->unsigned();
            $table->integer('images_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade');
            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
            $table->string('titolo');
            $table->string('immagine');
            $table->string('descrizione');
            $table->float('prezzo');
            //se l'evento non è a pagamento puo essere gratis
            // o permettere una donazione
            $table->boolean('gratis');
            $table->boolean('donazione');
            $table->boolean('qta_max_biglietti');//massimo numero di biglietti per cliente
            $table->string('stato'); //aperto chiuso in corso ecc
            $table->integer('numero_posti_totali');
            $table->integer('numero_posti_disponibili');
//            $table->date('dataEvento');
            $table->date('dataEventoInizio');
            $table->date('dataEventoFine');
//            $table->date('dataCreazione');
            $table->integer('visualizzazioni');

            $table->timestamps();
            //url per adesso lo facciamo dinamico

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
