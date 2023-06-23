<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
//  */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'tags' => "electronic, fridge, housek",
            'price' => fake()->year(),
            'company' => fake()->company(),
            'description' => fake()->sentence(),
        ];
    }
}
