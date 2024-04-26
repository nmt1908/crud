<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'post_name' => 'Rèn luyện thể thao, tăng cường sức khỏe',
            'post_description' => 'Nên luyện tập thể thao, để sức khỏe được tốt, ...',
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'post_name' => 'Chạy bộ đúng cách',
            'post_description' => 'Việc chạy bộ đúng cách sẽ hạn chế chấn thương',
        ]);
    }
}
