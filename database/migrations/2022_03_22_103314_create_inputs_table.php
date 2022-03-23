<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date ('date_of_delivery')-> nullable();
            $table->string ('product_name')-> nullable();
            $table->string ('quantities')-> nullable();
            $table->string ('unit_price')-> nullable();
            $table->string ('supplier')-> nullable();
            $table->string ('capturedBy')-> nullable();
            $table->string ('description')-> nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
}
