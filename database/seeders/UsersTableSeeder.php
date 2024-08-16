<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルに登録するデータ
        DB::table('users')->insert([
            [//'id'=>'1',
             'username'=>'Atlas一郎',
             'email'=>'aaa@mail.com',
             'password'=>'0001',
             'bio'=>'自己紹介文を登録できます。'],
             [//'id'=>'2',
                'username'=>'Atlas二郎',
                'email'=>'bbb@mail.com',
                'password'=>'0002',
                'bio'=>'自己紹介文を登録できます。']
        ]);
    }
}
