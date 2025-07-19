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
        $contents = ['<div class="level-header">Printing Your First Message in C</div>
                <div class="level-content">Welcome to your first step in learning the C programming language! In this lesson,
                    you’ll learn how to:
                    <ul>
                        <li>Write a simple C program.</li>
                        <li>Use #include and main() function.</li>
                        <li>Use printf() to display output on the screen.</li>
                        <li>Understand the role of semicolons (;) in C.</li>
                    </ul>
                </div>
                <div class="level-sub-header">Example Code:</div>

                <div class="level-code-input">
                    #include &lt;stdio.h&gt; <br> <br>

                        int main() { <br>
                            &nbsp; &nbsp; &nbsp; printf("Hello, World!"); <br>
                            &nbsp; &nbsp; &nbsp; return 0; <br>
                        }                        
                </div>
                <div class="level-sub-header">Explaination:</div>
                <div class="level-content">
                    <ul>
                        <li>#include <stdio.h>: Tells the compiler to include the Standard Input/Output library so you can use functions like printf.</li>
                        <li>    main(): The starting point of every C program.</li>
                        <li>    printf(...): Prints the message to the screen.</li>
                        <li>    return 0;: Indicates the program ended successfully.</li>
                    </ul>
                </div>',
                '<div class="level-header">Declaring and Using Variables in C</div>
                <div class="level-content"> In this level, you’ll learn how to declare variables and understand basic data
                    types in C.</div>
                <div class="level-sub-header">Key Concepts:</div>
                <div class="level-content">
                    <ul>
                        <li>A variable is a named space in memory used to store values.</li>
                        <li>In C, every variable must be declared with a data type.</li>
                        <li>Common data types:</li>
                        <li>int: Integer numbers (e.g., 10, -3)</li>
                        <li>float: Decimal numbers (e.g., 3.14)</li>
                        <li>char: A single character (e.g., \'A\')</li>
                        <li>Syntax for declaring variables:</li>
                    </ul>
                </div>
                <div class="level-code-input">
                    int age = 25; <br>
                    float pi = 3.14; <br>
                    char grade = \'A\'; <br>
                </div>
                <div class="level-sub-header">Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt; <br> <br>

                    int main() { <br>
                    &nbsp;&nbsp;&nbsp; int age = 20; <br>
                    &nbsp;&nbsp;&nbsp;float height = 5.9; <br>
                    &nbsp;&nbsp;&nbsp;char grade = \'B\'; <br> <br>

                    &nbsp;&nbsp;&nbsp;printf("Age: %d\n", age); <br>
                    &nbsp;&nbsp;&nbsp;printf("Height: %.1f\n", height); <br>
                    &nbsp;&nbsp;&nbsp;printf("Grade: %c\n", grade); <br> <br>

                    &nbsp;&nbsp;&nbsp;return 0; <br>
                    }
                </div>
                <div class="level-sub-header">Note:</div>
                <div class="level-content"><ul>
                    <li>%d is used to print int</li>
                    <li>%.1f is used to print float with 1 decimal place</li>
                    <li>%c is used to print char</li>
                </ul></div>'
        ];
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
