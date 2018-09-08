<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_comments', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users');
            $table->integer('restaurantID')->unsigned();
            $table->foreign('restaurantID')->references('id')->on('restaurants');
            $table->integer('commentID')->unsigned();
            $table->foreign('commentID')->references('id')->on('comments');
            $table->string('image');
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
        Schema::dropIfExists('album_comments');
    }
}
