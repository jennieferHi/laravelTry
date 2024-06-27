<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {  static $order_id;
        return [ 
            'custom_id' => $order_id ?: $order_id = 1,
            'order_total' => $this->faker->numberBetween(1000, 5000000),  // 生成100到5000之间的随机数作为订单总额
            'order_remainTotal' => $this->faker->numberBetween(1000, 5000000),  // 可以按需调整范围
        ];
    }
}
