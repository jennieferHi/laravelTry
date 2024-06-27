<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {static $order_id;
        return [ 
            "custom_id" =>$order_id?: $order_id = 1,
            "product_id" => $order_id?: $order_id = 1,
            "count" => $this->faker->numberBetween(0, 10),
            "remaincount"  => $this->faker->numberBetween(0, 10),
        ];
    }
}