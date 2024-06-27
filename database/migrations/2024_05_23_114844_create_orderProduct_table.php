<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->increments('order_product_id');
    $table->integer('custom_id')->unsigned();  // 定義 custom_id 列
    $table->integer('product_id')->unsigned();  // 定義 product_id 列
    $table->integer('count');  
    $table->integer('remaincount');  
    $table->timestamps();
    // 設置外鍵約束
    $table->foreign('custom_id')
          ->references('custom_id')
          ->on('custom');
    
    $table->foreign('product_id')
          ->references('product_id')
          ->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
};