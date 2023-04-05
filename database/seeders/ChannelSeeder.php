<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channel')->insert([
            [
            'id' => 1,
            'name' => 'Channel 1',
            'created_at' => now(),
            'updated_at' => now()
         ]
        ,
        [
            'id' => 2,
        'name' => 'Channel 2',

        'created_at' => now(),
        'updated_at' => now()
        ],
        [
            'id' => 3,
        'name' => 'Channel 3',

        'created_at' => now(),
        'updated_at' => now()
        ],
        [
            'id' => 4,
        'name' => 'Channel 4',

        'created_at' => now(),
        'updated_at' => now()
        ],
        [
            'id' => 5,
        'name' => 'Channel 5',

        'created_at' => now(),
        'updated_at' => now()
    ]
    ,
    [
        'id' => 6,
    'name' => 'Channel 6',

    'created_at' => now(),
    'updated_at' => now()
    ],
    [
        'id' => 7,
    'name' => 'Channel 7',

    'created_at' => now(),
    'updated_at' => now()
    ],[
        'id' => 8,
    'name' => 'Channel 8',

    'created_at' => now(),
    'updated_at' => now()
]
,[
    'id' => 9,
'name' => 'Channel 9',

'created_at' => now(),
'updated_at' => now()
]
,[
    'id' => 10,
'name' => 'Channel 10',

'created_at' => now(),
'updated_at' => now()
]


    ]);
    }
}
