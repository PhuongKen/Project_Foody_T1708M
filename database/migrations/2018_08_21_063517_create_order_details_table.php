<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('orderID')->unsigned();
<<<<<<< HEAD
         //   $table->foreign('orderID')->references('id')->on('orders');
            $table->integer('foodID')->unsigned();
         //   $table->foreign('foodID')->references('id')->on('foods');
=======
           // $table->foreign('orderID')->references('id')->on('orders');
            $table->integer('foodID')->unsigned();
           // $table->foreign('foodID')->references('id')->on('foods');
>>>>>>> 3bc3e3b0d83cd620e9e8ee7acb3899769fee86ef
            $table->string('nameProduct');
            $table->string('image');
            $table->integer('price');
            $table->integer('amount');
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
        Schema::dropIfExists('order_details');
    }
}
