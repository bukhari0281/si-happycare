<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'name' => 'Skrining Umum',
        ]);
        DB::table('services')->insert([
            'name' => 'Skrining Jantung',
        ]);
        DB::table('services')->insert([
            'name' => 'Skrining Kanker',
        ]);
        DB::table('services')->insert([
            'name' => 'Skrining Pria',
        ]);
        DB::table('services')->insert([
            'name' => 'Skrining Wanita',
        ]);
        DB::table('services')->insert([
            'name' => 'Tes Genomic',
        ]);
        DB::table('services')->insert([
            'name' => 'Fisioterapi',
        ]);
        DB::table('services')->insert([
            'name' => 'Laboratorim',
        ]);
        DB::table('services')->insert([
            'name' => 'Radiologi',
        ]);
        DB::table('services')->insert([
            'name' => 'Telemedisin',
        ]);


        $this->command->info('Faskes Kategori seeding successful.');
    }
}
