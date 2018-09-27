<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        if (Schema::hasTable('users')) {
            Schema::drop('users');

            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('surname');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('address');
                $table->integer('age');
                $table->integer('telephoneNumber');
                $table->integer('utente_id')->unsigned();
//                $table->foreign('utente_id')->references('user_id')->on('group_user');
                $table->rememberToken();
                $table->timestamps();

            });
        }
        else
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->string('surname');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('address');
                $table->integer('age');
                $table->integer('telephoneNumber');
                $table->integer('utente_id')->unsigned();
                $table->rememberToken();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('users');
    }
}

