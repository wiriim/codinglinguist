<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['C', 'Python', 'Java'];
        foreach ($names as $name) {
            DB::table('courses')->insert([
                'name' => $name,
            ]);
        }
    }
}
