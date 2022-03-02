<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkins', function (Blueprint $table) {
            $table->bigIncrements('uuid');
            $table->string('id')->nullable();
            $table->string('owner')->nullable();
            $table->string('id_number')->nullable();
            $table->string('serial')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('department')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('checkins');
    }
}
