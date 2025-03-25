<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->numberBetween(100, 1000),
            'image' => $this->faker->imageUrl(200, 200),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id,

        ];
    }
}
