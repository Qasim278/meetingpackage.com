<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HotelChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('hotels_channel')->truncate();
         $query =
         "INSERT INTO hotels_channel (hotel_id, channel_id)
         SELECT hotels.id, channel.id  FROM hotels CROSS JOIN channel";
          DB::statement($query);
    }
}
