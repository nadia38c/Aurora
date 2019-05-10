<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenematographyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cenematography_packages', function (Blueprint $table) {
            $table->bigIncrements('cinepackageID');
            $table->string('packageName',200);
            $table->string('raw_footage',5)->nullable();
            $table->string('edited_video',5)->nullable();
            $table->string('slug')->unique();
            $table->integer('videographers')->nullable();
            $table->string('vdo_quality',10)->nullable();
            $table->string('hours',50)->nullable();
            $table->double('amount')->default(0);
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
        Schema::dropIfExists('cenematography_packages');
    }
}
