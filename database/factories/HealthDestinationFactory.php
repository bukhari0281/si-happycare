<?php

namespace Database\Factories;

use App\Models\Bahasa;
use App\Models\HealthDestination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class HealthDestinationFactory extends Factory
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
            'faskes_kategori_id' => mt_rand(1, 3),
            // 'bahasa_id' => mt_rand(1, 6),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (HealthDestination $healthDestination) {
            $jumlahBahasa = $this->faker->numberBetween(1, 2); // Tentukan berapa banyak bahasa yang ingin dihubungkan (misalnya, 1-5 bahasa)
            $bahasaIds = Bahasa::inRandomOrder()->limit($jumlahBahasa)->pluck('id')->toArray(); // Ambil beberapa ID bahasa secara acak
            $healthDestination->bahasa()->attach($bahasaIds);
        });
    }
}
