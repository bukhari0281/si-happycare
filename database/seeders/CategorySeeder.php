<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Health Destination',
        ]);

        DB::table('categories')->insert([
            'name' => 'Tourist Destination',
        ]);

        DB::table('categories')->insert([
            'name' => 'French',
        ]);

        DB::table('categories')->insert([
            'name' => 'Italian',
        ]);

        DB::table('categories')->insert([
            'name' => 'Spanish',
        ]);

        DB::table('categories')->insert([
            'name' => 'German',
        ]);

        $this->command->info('Language seeding successful.');

    }
}
