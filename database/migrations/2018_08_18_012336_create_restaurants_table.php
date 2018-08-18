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
            $table->string('name');
            $table->string('avartar');
            $table->integer('addressID')->unsigned();
            $table->integer('phone');
            $table->string('openTime');
            $table->string('closeTime');
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
