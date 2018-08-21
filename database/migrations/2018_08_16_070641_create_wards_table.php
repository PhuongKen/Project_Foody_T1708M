<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->increments('id')->usigned();
            $table->integer('districtID')->unsigned();
<<<<<<< HEAD
          //  $table->foreign('districtID')->references('id')->on('districts');
=======
            //$table->foreign('districtID')->references('id')->on('districts');
>>>>>>> 3bc3e3b0d83cd620e9e8ee7acb3899769fee86ef
            $table->string('name');
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
        Schema::dropIfExists('wards');
    }
}
