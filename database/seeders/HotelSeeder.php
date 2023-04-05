<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            [
            'id' => 1,
            'label' => 'Hotel A',
            'name' => 'Hotel A',
            'created_at' => now(),
            'updated_at' => now()
         ]
        ,
        [
            'id' => 2,
        'name' => 'Hotel B',
        'label' => 'Hotel B',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
            'id' => 3,
        'name' => 'Hotel C',
        'label' => 'Hotel C',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
            'id' => 4,
        'name' => 'Hotel D',
        'label' => 'Hotel D',
        'created_at' => now(),
        'updated_at' => now()
        ],
        [
            'id' => 5,
        'name' => 'Hotel E',
        'label' => 'Hotel E',
        'created_at' => now(),
        'updated_at' => now()
    ]

    ]);
    }
}
