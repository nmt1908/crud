<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->insert([
            'favorite_name' => 'Thể thao',
            'favorite_description' => 'Thích câu lạc bộ Real, Barca, MU, ...',
        ]);

        DB::table('favorites')->insert([
            'favorite_name' => 'Du lịch',
            'favorite_description' => 'Tôi yêu Việt Nam, tôi muốn đi du lịch khắp mọi miền đất nước, ...',
        ]);

        DB::table('favorites')->insert([
            'favorite_name' => 'Xem phim',
            'favorite_description' => 'Tôi rất thích xem phim hoạt hình',
        ]);
    }
}
