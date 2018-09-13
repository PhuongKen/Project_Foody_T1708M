<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('restaurantID')->unsigned();
            $table->foreign('restaurantID')->references('id')->on('restaurants');
            $table->string('name');
            $table->string('avatar');
            $table->integer('price');
            $table->integer('discount')->nulllable();
            $table->integer('status')->default(1); // 0 hết, 1 còn, 2 không bán nữa.
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
        Schema::dropIfExists('foods');
    }
}
