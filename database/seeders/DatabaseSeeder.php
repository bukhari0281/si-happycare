<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bahasa;
use App\Models\City;
use App\Models\Contact;
use App\Models\FaskesKategori;
use App\Models\Gallery;
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

        // Dijalankan Sesuai dengan urutan

        // City::factory(100)->create(); // --> 1
        $this->call([
            FaskesKategoriSeeder::class,  // --> 2
            WisataKategoriSeeder::class,  // --> 2
            CitySeeder::class,  // --> 2
            // ServiceSeeder::class,  // --> 2
            LanguageSeeder::class,  // --> 2
            AkunSeeder::class,  // --> 2
        ]);

        // HealthDestination::factory(10)->create(); // --> 3
        // tourist_destination::factory(10)->create(); // --> 3
        // Contact::factory(10)->create(); // --> 4
        // Service::factory(10)->create(); // --> 5
        // Bahasa::factory(10)->create(); // --> 6
        // Gallery::factory(10)->create(); // --> 7


    }
}
