<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartDetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('bill_id');
            $table->string('product');
            $table->string('price');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_address');
            $table->string('user_phone');
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
        Schema::dropIfExists('cartDetail');
    }
}
