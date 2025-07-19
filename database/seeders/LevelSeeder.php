<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // C seeder
        $titles = [
            "Printing Your First Message in C",
            "Declaring and Using Variables in C",
            "Taking User Input and Displaying Output in C",
            "Using Constants and #define in C",
            "Using Arithmetic Operators in C",
            "Using Relational Operators in C",
            "Logical Operators in C",
            "Assignment and Compound Assignment in C",
            "Using Increment and Decrement Operators in C",
            "Julius Lie Mall – Fixed Discount Day",
            "Getting Started with Strings and Conditions",
            "Making Multi-Path Decisions with else if",
            "Repeating Tasks with while and do while Loops",
            "Controlled Repetition with the for Loop",
            "Student Score Evaluator (Curriculum Edition)",
            "Writing and Calling Functions in C",
            "Passing Data to Functions (and Getting It Back)",
            "Putting It All Together: Smarter Functions",
            "Smarter Functions: Breaking Programs into Logical Parts",
            "Course Final Project"
        ];
        $contents = ['<div class="level-content">Welcome to your first step in learning the C programming language! In this lesson, you’ll learn how to: <ul> <li>Write a simple C program.</li><li>Use #include and main() function.</li><li>Use printf() to display output on the screen.</li><li>Understand the role of semicolons (;) in C.</li> </ul></div>'];
        $number = 1;
        foreach ($titles as $title) {
            DB::table('levels')->insert([
                'course_id' => 1,
                'number' => $number,
                'title' => $title,
                'content' => $contents[0]
            ]);
            $number++;
        }
    }
}
