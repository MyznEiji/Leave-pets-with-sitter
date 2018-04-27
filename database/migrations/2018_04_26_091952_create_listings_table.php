<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home_type');
            $table->string('pet_type');
            $table->string('pet_size');
            $table->integer('breeding_years');
            $table->string('address');
            $table->string('listing_title');
            $table->text('listing_content');
            $table->integer('price_pernight');
            $table->boolean('active');
            $table->integer('user_id');
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
        Schema::drop('listings');
    }
}
