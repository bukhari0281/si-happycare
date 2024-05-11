<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tourist_destination>
 */
class tourist_destinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(mt_rand(1, 6)),
            'description' => $this->faker->paragraph(mt_rand(5, 8)),
            'wisata_kategori_id' => mt_rand(1, 5),
        ];
    }
}
