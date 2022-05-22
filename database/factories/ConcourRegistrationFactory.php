<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConcourRegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'program_choice' => $this->faker->randomElement(['MENG', 'MARCH', 'MMANG', 'STECH']),
            'transaction_id' => $this->faker->randomNumber(7, true),
            'status' => $this->faker->randomElement(['0', '1']),
            'created_at' => now()
        ];
    }
}
