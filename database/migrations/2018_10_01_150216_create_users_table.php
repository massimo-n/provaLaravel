<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('email')->unique();

//            lo mettiamo temporaneo nella vista?
//            $table->integer('numeroCarta')->unique();
//            $table->string('pagamentoPreferito');
//            $table->date('scadenzaCarta');

            $table->string('paese')->nullable();
            $table->string('indirizzo')->default('');
            $table->string('indirizzo1')->default('');
            $table->string('citta')->default('');
            $table->string('provincia')->default('');
            $table->integer('cap')->default(0);
            $table->string('password')->default('');
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
}
