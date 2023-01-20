<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'orderNo' => $this->faker->numberBetween(2003, 50009),
            'clients_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
