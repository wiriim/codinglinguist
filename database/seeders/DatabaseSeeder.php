<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CourseSeeder::class,
            CategorySeeder::class,
            CategoryTypeSeeder::class,
            \Database\Seeders\LevelSeeder\CLevelSeeder::class,
            \Database\Seeders\QuestionSeeder\CQuestionSeeder::class,
            \Database\Seeders\LevelSeeder\JavaLevelSeeder::class,
            \Database\Seeders\QuestionSeeder\JavaQuestionSeeder::class,
            \Database\Seeders\LevelSeeder\PythonLevelSeeder::class,
            \Database\Seeders\QuestionSeeder\PythonQuestionSeeder::class,
            \Database\Seeders\BadgeSeeder::class,
            UserSeeder::class,
            ForumSeeder::class
        ]);
    }
}
