<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * i dati del pagamento non li gestiamo cosi se rubbano il db non abbiamo danni
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('email')->unique();
            $table->integer('images_id')->unsigned();
            $table->foreign('images_id')->references('id')->on('images')->onDelete('cascade');
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade');
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
