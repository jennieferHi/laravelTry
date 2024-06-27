<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Custom::factory()->count(10)->create();

    // 然后创建 order 数据
    \App\Models\Order::factory()->count(10)->create(); 

    }
}
