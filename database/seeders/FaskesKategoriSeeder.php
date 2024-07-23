<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaskesKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        DB::table('faskes_kategoris')->insert([
            'name' => 'Hospital',
        ]);

        $this->command->info('Faskes Kategori seeding successful.');
    }
}
