<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BillDetail;
use App\Models\Bills;
use App\Models\Products;

class BillDetailFactory extends Factory
{
    protected $model = BillDetail::class;

    public function definition()
    {
        return [
            'id_bill' => Bills::inRandomOrder()->first()->id ?? null,
            'id_product' => Products::inRandomOrder()->first()->id ?? null,
            'quantity' => $this->faker->numberBetween(1, 10),
            'unit_price' => $this->faker->randomFloat(2, 10, 100),
            'status' => $this->faker->randomElement(['Pending', 'Shipped', 'Delivered', 'Cancelled']),
        ];
    }
}