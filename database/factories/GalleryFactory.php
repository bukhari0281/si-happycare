<?php

namespace Database\Factories;

use App\Models\HealthDestination;
use App\Models\tourist_destination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->imageUrl(),
            'health_destination_id' => function () {
                return HealthDestination::inRandomOrder()->first()->id;
            },
        ];
    }
}
