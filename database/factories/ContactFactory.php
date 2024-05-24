<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $allIds = range(1, 10); // Buat array dengan semua ID dari 1 hingga 10

        shuffle($allIds); // Acak urutan ID

        return [
            'address' => $this->faker->address(mt_rand(1, 5)),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'city_id' => mt_rand(1, 10),
            'health_destination_id' => mt_rand(1, 10), // Ambil 5 ID pertama
            'tourist_destination_id' => mt_rand(1, 10), // Ambil 5 ID terakhir
        ];
    }
}
