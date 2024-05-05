<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('languages')->insert([
            'name' => 'English',
        ]);

        DB::table('languages')->insert([
            'name' => 'Romanian',
        ]);

        DB::table('languages')->insert([
            'name' => 'French',
        ]);

        DB::table('languages')->insert([
            'name' => 'Italian',
        ]);

        DB::table('languages')->insert([
            'name' => 'Spanish',
        ]);

        DB::table('languages')->insert([
            'name' => 'German',
        ]);

        $this->command->info('Language seeding successful.');
    }
}
