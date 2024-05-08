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
        DB::table('bahasas')->insert([
            'name' => 'English',
        ]);

        DB::table('bahasas')->insert([
            'name' => 'Romanian',
        ]);

        DB::table('bahasas')->insert([
            'name' => 'French',
        ]);

        DB::table('bahasas')->insert([
            'name' => 'Italian',
        ]);

        DB::table('bahasas')->insert([
            'name' => 'Spanish',
        ]);

        DB::table('bahasas')->insert([
            'name' => 'German',
        ]);

        $this->command->info('Language seeding successful.');
    }
}
