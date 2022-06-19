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
            $table->id();
            $table->string('product_name');
            $table->string('product_image')->nullable();
            $table->text('product_description');
            $table->string('product_category');
            $table->string('product_size');
            $table->integer('product_costprice');
            $table->integer('product_saleprice');
            $table->integer('product_quantity');
            $table->integer('product_status')->default(1)->nullable()->comment('1 for active 2 for inactive');
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
