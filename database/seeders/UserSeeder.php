<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'username' => 'WilliamCatLovrr',
            'email' => 'williamcatlovrr@gmail.com',
            'password' => Hash::make('william'),
            'status' => 0,
            'point' => 0,
            'role'=> 'user'
        ]);
        DB::table('user_level')->insert([
            'user_id' => '1',
            'level_id' => '1',
            'status' => 0
        ]);
        DB::table('user_level')->insert([
            'user_id' => '1',
            'level_id' => '21',
            'status' => 0
        ]);
        DB::table('user_level')->insert([
            'user_id' => '1',
            'level_id' => '41',
            'status' => 0
        ]);
    }
}
