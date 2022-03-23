<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string ('field_name')-> nullable();
            $table->date ('date_started')-> nullable();
            $table->string ('activity')-> nullable();
            $table->string ('input_name')-> nullable();
            $table->string ('quantity')-> nullable();
            $table->string ('description')-> nullable();
            $table->string ('supplier')-> nullable();
            $table->date ('date_ended')-> nullable();
            $table->string ('comment')-> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes');
    }
}
