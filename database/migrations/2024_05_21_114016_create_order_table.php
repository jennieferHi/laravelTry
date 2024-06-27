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
        Schema::create('order', function (Blueprint $table) {
            $table->increments("order_id");
            $table->integer('custom_id')->unsigned();  // 定義 custom_id 列
            $table->integer("order_total");   
            $table->integer("order_remainTotal");  
            $table->timestamps();
              // 設置外鍵約束
        $table->foreign('custom_id')->references('custom_id')->on('custom'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_order');
    }
};
