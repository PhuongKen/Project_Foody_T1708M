<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('categoryID')->unsigned();
            $table->foreign('categoryID')->references('id')->on('categories');
            $table->string('name');
            $table->string('avartar');
            $table->integer('addressID')->unsigned();
            $table->foreign('addressID')->references('id')->on('addresses');
            $table->string('addressDetail');
            $table->integer('phone');
            $table->time('openTime');
            $table->time('closeTime');
            $table->string('shortDescription');
            $table->text('description');
            $table->integer('status')->default(1); // 1 hoạt động, 0 đã xóa, 2 ngừng bán
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
        Schema::dropIfExists('restaurants');
    }
}
