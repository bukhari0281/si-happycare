<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username'=>'admin',
                'name'=>'AkunAdmin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],

            [
                'username'=>'kesehatan',
                'name'=>'Penyedia Layanan Kesehatan',
                'email'=>'kesehatan@gmail.com',
                'role'=>'pl_kesehatan',
                'password'=>bcrypt('123456')
            ],

            [
                'username'=>'wisata',
                'name'=>'Penyedia Layanan ',
                'email'=>'wisata@gmail.com',
                'role'=>'pl_wisata',
                'password'=>bcrypt('123456')
            ],
            [
                'username'=>'user',
                'name'=>'AkunUser',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123456')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
