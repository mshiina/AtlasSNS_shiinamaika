<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルに登録するデータ
        DB::table('posts')->insert([
            [//'id'=>'1',
             'user_id'=>'1',
             'post'=>'投稿内容がここに表示されます。']
        ]);
    }
}
