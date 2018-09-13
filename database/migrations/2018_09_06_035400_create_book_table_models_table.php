<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTableModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_table_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID');
            $table->integer('restaurantID');
            $table->date('ngaydat');
            $table->time('thoigiandat');
            $table->integer('sokhach');
            $table->string('name');
            $table->string('sdt');
            $table->string('ghichu');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('book_table_models');
    }
}
