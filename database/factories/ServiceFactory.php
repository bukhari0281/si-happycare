<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(mt_rand(5, 8)),
            'description' => $this->faker->paragraph(mt_rand(5, 8)),
            'health_destination_id' => mt_rand(1, 13),
            // 'tourist_destination_id' => $this->faker->name,
        ];
    }
}
