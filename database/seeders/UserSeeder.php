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
        for ($i = 1; $i < 13; $i++){
            if ($i == 1){
                DB::table('users')->insert([
                    'username' => 'admin',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin'),
                    'status' => 0,
                    'point' => 0,
                    'role'=> 'admin'
                ]);
            }
            else{
                DB::table('users')->insert([
                    'username' => 'William'.$i,
                    'email' => 'william'.$i.'@gmail.com',
                    'password' => Hash::make('william'),
                    'status' => 0,
                    'point' => 0,
                    'role'=> 'user'
                ]);
                DB::table('user_level')->insert([
                    'user_id' => $i,
                    'course_id' => '1',
                    'level_id' => '1',
                    'status' => 0
                ]);
                DB::table('user_level')->insert([
                    'user_id' => $i,
                    'course_id' => '2',
                    'level_id' => '41',
                    'status' => 0
                ]);
                DB::table('user_level')->insert([
                    'user_id' => $i,
                    'course_id' => '3',
                    'level_id' => '21',
                    'status' => 0
                ]);
            }
           
        }
        
    }
}
