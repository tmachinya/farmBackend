<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string ('name')-> nullable();
            $table->date ('date_received')-> nullable();
            $table->string ('category')-> nullable();
            $table->string ('number')-> nullable();
            $table->string ('asset')-> nullable();
            $table->string ('description')-> nullable();
            $table->string ('purchase_value')-> nullable();
            $table->string ('location')-> nullable();
            $table->string ('project')-> nullable();
            $table->string ('chasis_number')-> nullable();
            $table->string ('engine_number')-> nullable();
            $table->string ('licence_plate')-> nullable();
            $table->string ('serial_number')-> nullable();
            $table->date ('date_commissioned')-> nullable();
            $table->string ('supplier')-> nullable();
            $table->string ('quantity')-> nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
