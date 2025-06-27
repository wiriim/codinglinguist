<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Error', 'Question', 'Discussion', 'Guide', 'Other'];
        foreach ($names as $name) {
            DB::table('category_types')->insert([
                'category_type_name' => $name,
            ]);
        }
    }
}
