<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use App\Models\Userss;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'note' => $this->faker->sentence(),
            'user_id' => Userss::inRandomOrder()->first()->id ?? null,
        ];
    }
}