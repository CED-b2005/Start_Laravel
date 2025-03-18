<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Slide;
use App\Models\Products;

class SlideFactory extends Factory
{
    protected $model = Slide::class;

    public function definition()
    {
        return [
            'link' => $this->faker->url(),
            'image' => $this->faker->imageUrl(640, 480, 'advertisement'),
            'id_product' => Products::inRandomOrder()->first()->id ?? null,
        ];
    }
}