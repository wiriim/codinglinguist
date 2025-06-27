<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['C', 'Python', 'Java'];
        foreach ($names as $name) {
            DB::table('categories')->insert([
                'category_name' => $name,
            ]);
        }
    }
}
