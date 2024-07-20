<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = [
            [ 
                'name'=>'Kabupaten Banjarnegara' 
            ],
            [ 
                'name'=>'Kabupaten Banyumas' 
            ], 
            [ 
                'name'=>'Kabupaten Batang' 
            ], 
            [ 
                'name'=>'Kabupaten Blora' 
            ], 
            [ 
                'name'=>'Kabupaten Boyolali' 
            ], 
            [ 
                'name'=>'Kabupaten Brebes' 
            ], 
            [ 
                'name'=>'Kabupaten Cilacap' 
            ], 
            [ 
                'name'=>'Kabupaten Demak' 
            ], 
            [ 
                'name'=>'Kabupaten Grobogan' 
            ], 
            [ 
                'name'=>'Kabupaten Jepara' 
            ],
            [ 
                'name'=>'Kabupaten Karanganyar' 
            ],
            [ 
                'name'=>'Kabupaten Kebumen' 
            ],
            [ 
                'name'=>'Kabupaten Kendal' 
            ],
            [ 
                'name'=>'Kabupaten Klaten' 
            ],
            [ 
                'name'=>'Kabupaten Kudus' 
            ],
            [ 
                'name'=>'Kabupaten Magelang' 
            ],
            [ 
                'name'=>'Kabupaten Pati' 
            ],
            [ 
                'name'=>'Kabupaten Pekalongan' 
            ],
            [ 
                'name'=>'Kabupaten Pemalang' 
            ],
            [ 
                'name'=>'Kabupaten Purbalingga' 
            ],
            [ 
                'name'=>'Kabupaten Purworejo' 
            ],
            [ 
                'name'=>'Kabupaten Rembang' 
            ],
            [ 
                'name'=>'Kabupaten Semarang' 
            ],
            [ 
                'name'=>'Kabupaten Sragen' 
            ],
            [ 
                'name'=>'Kabupaten Sukoharjo' 
            ],
            [ 
                'name'=>'Kabupaten Tegal' 
            ],
            [ 
                'name'=>'Kabupaten Temanggung' 
            ],
            [ 
                'name'=>'Kabupaten Wonogiri' 
            ],
            [ 
                'name'=>'Kabupaten Wonosobo' 
            ],
            [ 
                'name'=>'Kabupaten Magelang' 
            ],
            [ 
                'name'=>'Kabupaten Pekalongan' 
            ],
            [ 
                'name'=>'Kabupaten Salatiga' 
            ],
            [ 
                'name'=>'Kabupaten Semarang' 
            ],
            [ 
                'name'=>'Kabupaten Surakarta' 
            ],
            [ 
                'name'=>'Kabupaten Tegal' 
            ],
        ];

        foreach ($city as $key => $value) {
            City::create($value);
        }
    }
}
