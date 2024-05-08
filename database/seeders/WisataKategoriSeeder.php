<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WisataKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('wisata_kategoris')->insert([
                'name' => 'Wisata Alam',
            ]);

            DB::table('wisata_kategoris')->insert([
                'name' => 'Wisata Budaya',
            ]);

            DB::table('wisata_kategoris')->insert([
                'name' => 'Wisata Petualangan',
            ]);

            DB::table('wisata_kategoris')->insert([
                'name' => 'Wisata Bisnis',
            ]);

            DB::table('wisata_kategoris')->insert([
                'name' => 'Wisata Religius',
            ]);

            $this->command->info('wisata_kategoris seeding successful.');
        }
    }
}
