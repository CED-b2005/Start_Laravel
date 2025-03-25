<?php 
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Tạo tên ngẫu nhiên
            'description' => $this->faker->sentence(), // Mô tả ngẫu nhiên
        ];
    }
}
