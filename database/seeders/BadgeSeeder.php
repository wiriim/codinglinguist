<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['c_clear', 'python_clear', 'java_clear', 'all_clear', '100_point', '300_point', '500_point',
                    'first_place', 'second_place', 'third_place', 'complete_level', 'create_forum'];
        foreach ($names as $name) {
            DB::table('badges')->insert([
                'badge_name' => $name,
            ]);
        }
    }
}
