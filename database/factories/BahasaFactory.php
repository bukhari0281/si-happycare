<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bahasa>
 */
class BahasaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bahasa_id' => mt_rand(1, 6),
            'health_destination_id' => mt_rand(1, 13),
            // 'tourist_destination_id' => $this->faker->name,
        ];
    }
}
