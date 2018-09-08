<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('provindID')->unsigned();
            $table->foreign('provindID')->references('id')->on('provinds');
            $table->integer('districtID')->unsigned();
            $table->foreign('districtID')->references('id')->on('districts');
            $table->integer('wardID')->unsigned();
            $table->foreign('wardID')->references('id')->on('wards');
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
        Schema::dropIfExists('addresses');
    }
}
