<?php

namespace Database\Factories;

use App\Models\Contact;
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
    protected static $healthDestinationIdCounter = 1; // Variabel static untuk menghitung ID

    public function definition(): array
    {
        return [
            'address' => $this->faker->address(mt_rand(1, 5)),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'city_id' => mt_rand(1, 10),
            // 'tourist_destination_id' => mt_rand(1, 10), // Ambil 5 ID terakhir
            'health_destination_id' => self::$healthDestinationIdCounter++, // Menggunakan counter dan increment
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Contact $contact) {
            // Reset counter jika mencapai batas
            if (self::$healthDestinationIdCounter > 10) {
                self::$healthDestinationIdCounter = 1;
            }
        });
    }
}
