<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory; 
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Custom>
 */
class CustomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $password;
        return [ 
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'address' => $this->faker->unique()->address(),
            'url' => $this->faker->unique()->url(),
            'other' => $password ?: $password = bcrypt('secret'),
            'birthday' => $this->faker->date('Y-m-d', 'now'),
            'description' => $this->faker->text(100),
            'score' => $this->faker->numberBetween(0, 10),
            'password' => Hash::make($password),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
 
}
