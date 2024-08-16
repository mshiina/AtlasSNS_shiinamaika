<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルに登録するデータ
        DB::table('follows')->insert([
            [//'id'=>'1',
             'following_id'=>'1',
             'followed_id'=>'2']
        ]);
    }
}
