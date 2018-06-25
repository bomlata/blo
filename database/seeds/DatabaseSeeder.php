<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bình',
            'email' => 'bomlata118@gmail.com',
            'password' => bcrypt('123123'),
            'verifyToken'=> str_random(40),
            'quyen' =>1,
            'status' =>1,
        ]);
        DB::table('users')->insert([
            'name' => 'Huy',
            'email' => 'bomlata111@gmail.com',
            'password' => bcrypt('123123'),
            'verifyToken'=> str_random(40),
            'quyen' =>1,
            'status' =>1,
        ]);
         DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'bomlata1@gmail.com',
            'password' => bcrypt('123123'),
            'verifyToken'=> str_random(40),
            'quyen' =>1,
            'status' =>1,
        ]);
         DB::table('loaitin')->insert([
            'tenloaitin' => 'Thủ Thuật Facebook',
            
        ]);
    }
}