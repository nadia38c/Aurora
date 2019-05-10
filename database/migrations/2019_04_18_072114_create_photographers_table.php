<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotographersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographers', function (Blueprint $table) {
            $table->bigIncrements('photographerID');
            $table->string('name',200);
            $table->string('designation',200);
            $table->string('slug')->unique();
            $table->string('email',200)->nullable();
            $table->string('phone',15)->nullable();
            $table->text('description')->nullable();
            $table->string('facebook',200)->nullable();
            $table->string('twitter',200)->nullable();
            $table->string('instagram',200)->nullable();
            $table->string('imageName',200)->nullable();
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
        Schema::dropIfExists('photographers');
    }
}
