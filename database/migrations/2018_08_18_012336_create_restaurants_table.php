<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('userID')->usigined();
            $table->integer('categoryID')->unsigned();
            //     $table->foreign('categoryID')->references('id')->on('categories');
            $table->string('name');
            $table->string('avartar');
            $table->integer('addressID')->unsigned();
            //  $table->foreign('addressID')->references('id')->on('addresses');
//            $table->foreign('categoryID')->references('id')->on('categories');
            $table->string('name');
            $table->string('avartar');
            $table->integer('addressID')->unsigned();
//            $table->foreign('addressID')->references('id')->on('addresses');
            $table->string('addressDetail');
            $table->integer('phone');
            $table->time('openTime');
            $table->time('closeTime');
            $table->string('shortDescription');
            $table->text('description');
            $table->int('numberTable');
            $table->double('lat');
            $table->double('lng');
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
