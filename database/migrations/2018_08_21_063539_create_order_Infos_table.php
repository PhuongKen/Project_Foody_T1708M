<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('orderID')->unsigned();
            $table->foreign('orderID')->references('id')->on('orders');;
            $table->string('name');
            $table->integer('phone');
            $table->integer('addressID')->unsigned();
            $table->foreign('addressID')->references('id')->on('addresses');
            $table->string('address');
            $table->string('note');
            $table->time('time');
            $table->date('date');
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
        Schema::dropIfExists('order_addresses');
    }
}
