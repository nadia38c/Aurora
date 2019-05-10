<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographyPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photography_packages', function (Blueprint $table) {
            $table->bigIncrements('photoPackageID');
            $table->string('type',50);
            $table->string('packageName',200);
            $table->string('slug')->unique();
            $table->integer('total_print')->nullable();
            $table->string('photo_shoot')->default('Unlimited');
            $table->string('imported_album',10)->nullable();
            $table->string('poster_photo',5)->nullable();
            $table->string('bridal_story',5)->nullable();
            $table->string('photo_movie',5)->nullable();
            $table->string('desk_calender',5)->nullable();
            $table->integer('photographers')->nullable();
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
        Schema::dropIfExists('photography_packages');
    }
}
