<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Contact;
use App\Models\HealthDestination;
use App\Models\Service;
use App\Models\tourist_destination;
use Database\Factories\FaskesFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // HealthDestination::factory(10)->create();
        // tourist_destination::factory(20)->create();
        // City::factory(10)->create();
        Contact::factory(10)->create();
        // Service::factory(10)->create();


    }
}
