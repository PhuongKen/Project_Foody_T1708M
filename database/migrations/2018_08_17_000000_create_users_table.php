<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addressID')->unsigned();
          //  $table->foreign('addressID')->references('id')->on('addresses');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avartar');
            $table->integer('phone');
            $table->integer('gender')->default(0);// 0 male, 1 female, 2 other
            $table->integer('status')->default(1); // 0 delete,  1 active, 2 block,
            $table->integer('verifyEmail')->default(0); // 0 chưa xác nhận, 1 đã xác nhận.
            $table->integer('role')->default(1); // 1 client, 2 admin
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
