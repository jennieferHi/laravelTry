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
        Schema::create('exchange', function (Blueprint $table) {
            $table->increments("exchange_product_id");
            $table->integer('order_product_id')->unsigned(); // 定義 order_product_id 列
            $table->integer("count");
            // 設置外鍵約束
            $table->foreign('order_product_id')
                ->references('order_product_id')
                ->on('order_product');
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
        Schema::dropIfExists('exchange');
    }
};
