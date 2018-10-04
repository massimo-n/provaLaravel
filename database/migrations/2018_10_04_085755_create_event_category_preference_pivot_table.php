<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventCategoryPreferencePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_category_preference', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('event_categories')->onDelete('cascade');
            $table->integer('preference_id')->unsigned();
            $table->foreign('preference_id')->references('id')->on('preferences')->onDelete('cascade');
            $table->primary(['category_id', 'preference_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('event_category_preference');
    }
}
