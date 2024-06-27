<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exchange>
 */
class ExchangeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $order_id;
        return [ 
            'order_product_id' =>$order_id?: $order_id = 1,
            'email' => $this->faker->unique()->email(),
            'count' => $this->faker->numberBetween(0, 10),
         
        ];
    }
}
