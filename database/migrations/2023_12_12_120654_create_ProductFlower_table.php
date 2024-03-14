<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductFlowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductFlower', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_image');
            $table->string('product_name');
            $table->integer('product_quantity');
            $table->text('product_description');
            $table->integer('category_id')->unique();
            $table->boolean('is_deleted')->default(false);
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
        Schema::dropIfExists('ProductFlower');
    }
}
