<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('bookingID');
            $table->string('customerName',200)->nullable();
            $table->string('customerEmail',200)->nullable();
            $table->string('phone',200)->nullable();
            $table->text('address')->nullable();
            $table->date('eventDate')->nullable();
            $table->string('category',15)->nullable();
            $table->string('packageName',200)->nullable();
            $table->string('status',15)->default('Pending');
            $table->string('packageType',20)->nullable();
            $table->string('photographer',200)->nullable();
            $table->double('amount')->nullable();
            $table->text('message')->nullable();
            $table->unsignedBigInteger('photoPackageID')->index()->nullable();
            $table->foreign('photoPackageID')->references('photoPackageID')->on('photography_packages')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('cinepackageID')->index()->nullable();
            $table->foreign('cinepackageID')->references('cinepackageID')->on('cenematography_packages')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('userID')->index()->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
