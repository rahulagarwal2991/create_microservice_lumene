<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_id');
            $table->string('title');
            $table->string('image_url');
            $table->string('category_paths');
            $table->string('mrp');
            $table->string('price');
            $table->string('product_url');
            $table->string('product_description');
            $table->string('product_brand');
            $table->string('is_available');
            $table->string('discount');
            $table->string('platform');
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
        Schema::dropIfExists('products');
    }
}
