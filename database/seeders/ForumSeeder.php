<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = ['C Test', 'Python Test', 'Java Test'];
        for($i = 1; $i < 20; $i++){
            DB::table('forums')->insert([
                'user_id' => $i%12 + 1,
                'category_id' => $i % 3 + 1,
                'category_type_id' => $i % 5 + 1,
                'title' => $title[$i%3] . $i,
                'content' => fake()->paragraph(6),
                'created_at' => now()->subDay()
            ]);
        }
    }
}
