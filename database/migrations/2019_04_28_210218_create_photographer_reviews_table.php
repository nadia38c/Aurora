<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographerReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographer_reviews', function (Blueprint $table) {
            $table->bigIncrements('photographerReviewID');
            $table->string('comment')->nullable();
            $table->integer('rating')->default(0);
            $table->unsignedBigInteger('photographerID')->index();
            $table->foreign('photographerID')->references('photographerID')->on('photographers')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('userID')->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('photographer_reviews');
    }
}
