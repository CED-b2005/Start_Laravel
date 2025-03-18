<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bills;
use App\Models\Customers;
use App\Models\Userss;

class BillsFactory extends Factory
{
    protected $model = Bills::class;

    public function definition()
    {
        return [
            'id_customer' => Customers::inRandomOrder()->first()->id ?? null,
            'id_user' => Userss::inRandomOrder()->first()->id ?? null,
            'date_order' => $this->faker->date(),
            'total' => $this->faker->randomFloat(2, 50, 500),
            'payment' => $this->faker->randomElement(['Cash', 'Credit Card', 'Bank Transfer']),
            'note' => $this->faker->sentence(),
        ];
    }
}