<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model = Product::class;

    public function definition(): array
    {   
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->buildingNumber(),
            'img' => $this->faker->image(null, 200, 200, 'animals', true),
        ];
    }
}
