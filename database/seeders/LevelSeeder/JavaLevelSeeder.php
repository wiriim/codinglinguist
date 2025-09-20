<?php

namespace Database\Seeders\LevelSeeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JavaLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'First Java Program',
            'Variables and Data Types',
            'Getting User Input with Scanner',
            'Arithmetic Operations',
            'Type Conversion (Casting)',
            'Constants and final Keyword',
            'Increment and Decrement Operators',
            'Comparison Operators',
            'Conditional Statements (if, else if, else)',
            'Java Gym Member Card',
            'while Loops + Teaching String Input Again',
            'do-while Loops',
            'for Loops',
            'break and continue',
            'Student Attendance Checker',
            'Introduction to Methods',
            'Methods with Multiple Parameters',
            'void Methods',
            'Multiple void Methods',
            'Student Grade Calculator',
        ];

        $contents = [
            // Level 1
            '<div class="level-header">The Structure of a Java Program & System.out.println()</div>
            <div class="level-content">Java requires a strict structure for every program:</div>
            <div class="level-code-input">
                public class Main {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[] args) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Code goes here<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }
            </div>
            <div class="level-content">To print output in Java, use:</div>
            <div class="level-code-input">System.out.println("Hello, world!");</div>
            <div class="level-content">✅ Java is case-sensitive  ✅  main  is the entry point  ✅ Every statement ends with a  ;</div>'
            ,
            // Level 2
            '<div class="level-header">Declaring Variables in Java</div>
            <div class="level-content">In Java, you must declare the data type before using a variable.</div>
            <div class="level-sub-header">🧪 Common Data Types</div>
            <div class="level-content">
            <table class="level-table">
            <thead><tr><th>Data Type</th><th>Description</th><th>Example</th></tr></thead>
            <tbody>
            <tr><td>int</td><td>Whole numbers</td><td>int x = 5;</td></tr>
            <tr><td>double</td><td>Decimal numbers</td><td>double pi = 3.14;</td></tr>
            <tr><td>boolean</td><td>True or false</td><td>boolean isOn = true;</td></tr>
            <tr><td>String</td><td>Text</td><td>String name = "Alex";</td></tr>
            </tbody>
            </table>
            </div>
            <div class="level-content">✅ Java uses String with a capital "S" (it\'s a class).<br>✅ All statements end with a semicolon ;</div>'
            ,
            //level 3
            '<div class="level-header">Getting Input with Scanner</div>
            <div class="level-content">Java uses the Scanner class to read user input from the keyboard.<br>To use it:<br></div>
            <div class="level-code-input">import java.util.Scanner;</div>
            <div class="level-content">Then create a Scanner object:</div>
            <div class="level-code-input">Scanner input = new Scanner(System.in);</div>
            <div class="level-content">Use methods like:
            <ul>
            <li>nextInt() → for integers</li>
            <li>nextDouble() → for decimals</li>
            <li>next() → for single-word strings</li>
            <li>nextLine() → for full-line strings</li>
            </ul>
            </div>'
            ,
            //level 4
            '<div class="level-header">Arithmetic with Variables</div>
            <div class="level-content">In Java, you can perform mathematical operations using variables just like in math:</div>
            <div class="level-sub-header">🧮 Basic Operators:</div>
            <div class="level-content">
            <table class="level-table">
            <thead><tr><th>Operator</th><th>Description</th><th>Example ( a = 10 ,  b = 5 )</th></tr></thead>
            <tbody>
            <tr><td>+</td><td>Addition</td><td>a + b → 15</td></tr>
            <tr><td>-</td><td>Subtraction</td><td>a - b → 5</td></tr>
            <tr><td>*</td><td>Multiplication</td><td>a * b → 50</td></tr>
            <tr><td>/</td><td>Division</td><td>a / b → 2</td></tr>
            <tr><td>%</td><td>Modulus (remainder)</td><td>a % b → 0</td></tr>
            </tbody>
            </table>
            </div>
            <div class="level-content">✅ Integer division (e.g., 5 / 2) gives an integer (2) ✅ Use double for more accurate decimal division (5.0 / 2 = 2.5)</div>'
            ,
            //level 5
            '<div class="level-header">Type Conversion (Casting) in Java</div>
            <div class="level-content">Java is a strongly typed language. That means if you want to store a double into an int, or vice versa, you must explicitly convert (cast) it.</div>
            <div class="level-sub-header">🔄 Implicit Conversion</div>
            <div class="level-content">Happens automatically when converting from a smaller type to a larger type:</div>
            <div class="level-code-input">int a = 10;<br>double b = a; // OK</div>
            <div class="level-sub-header">🔁 Explicit Conversion (Casting)</div>
            <div class="level-content">Required when converting from a larger type to a smaller type, or when you want to control the conversion.</div>
            <div class="level-code-input">double a = 5.7;<br>int b = (int) a; // b = 5</div>
            <div class="level-content">⚠️ Warning:<br>Casting a decimal to an integer removes the decimal part, not rounds it!<br>(double) 7 / 2 → 3.5<br>7 / 2 → 3<br>(double) (7 / 2) → 3.0 ❌ (be careful!)</div>'
            ,
            //level 6
            '<div class="level-header">Constants and the final Keyword</div>
            <div class="level-content">In Java, if a value should not change, we use final to declare it as a constant:</div>
            <div class="level-code-input">final int MAX_SCORE = 100;</div>
            <div class="level-content">✅ final means you can’t reassign the variable ✅ Constant names are usually ALL_UPPERCASE<br>If you try to change a final variable, Java will throw a compile-time error.</div>'
            ,
            //level 7
            '<div class="level-header">Shorthand Increment ( ++ ) and Decrement ( -- ) in Java</div>
            <div class="level-content">You can increase or decrease a number by 1 using these operators:</div>
            <div class="level-code-input">i++; // increment by 1 (same as i = i + 1)<br>i--; // decrement by 1 (same as i = i - 1)</div>
            <div class="level-sub-header">🔁 Two Forms:</div>
            <div class="level-content">
            <table class="level-table">
            <thead><tr><th>Form</th><th>Description</th><th>Example</th><th>Notes</th></tr></thead>
            <tbody>
            <tr><td>i++</td><td>Post-increment</td><td>"Use the value, then add 1"</td><td>int x = i++;</td></tr>
            <tr><td>++i</td><td>Pre-increment</td><td>"Add 1 first, then use it"</td><td>int x = ++i;</td></tr>
            </tbody>
            </table>
            </div>
            <div class="level-content">Same logic applies for --i vs i-- .</div>'
            ,
            //level 8
            '<div class="level-header">Comparing Values in Java</div>
            <div class="level-content">Java supports several comparison operators, which always return a boolean result (true or false).</div>
            <div class="level-sub-header">🔗 Comparison Operators Table:</div>
            <div class="level-content">
            <table class="level-table">
            <thead><tr><th>Operator</th><th>Meaning</th><th>Example</th><th>Result</th></tr></thead>
            <tbody>
            <tr><td>==</td><td>Equal to</td><td>5 == 5</td><td>true</td></tr>
            <tr><td>!=</td><td>Not equal to</td><td>5 != 3</td><td>true</td></tr>
            <tr><td>&lt;</td><td>Less than</td><td>3 &lt; 7</td><td>true</td></tr>
            <tr><td>&gt;</td><td>Greater than</td><td>10 &gt; 20</td><td>false</td></tr>
            <tr><td>&lt;=</td><td>Less than or equal</td><td>4 &lt;= 4</td><td>true</td></tr>
            <tr><td>&gt;=</td><td>Greater than or equal</td><td>5 &gt;= 2</td><td>true</td></tr>
            </tbody>
            </table>
            </div>
            <div class="level-content">❗ Be careful:<br>== checks equality<br>= is for assignment (don\'t mix them!)</div>'
            ,
            //level 9
            '<div class="level-header">Making Decisions with if Statements</div>
            <div class="level-content">Java uses if statements to decide which code to run based on a condition.</div>
            <div class="level-sub-header">🔧 Syntax:</div>
            <div class="level-code-input">
            if (condition) {<br>
            // run this code if condition is true<br>
            } else if (anotherCondition) {<br>
            // run this if the first condition was false, and this is true<br>
            } else {<br>
            // run this if none of the above were true<br>
            }
            </div>
            <div class="level-content">Each condition must be a boolean expression (e.g., score > 60 or age == 18).</div>'
            ,
            //level 10
            '<div class="level-header">Java Gym Member Card</div>
            <div class="level-content">You’ve been hired by a local gym to develop a simple member check-in system. Each gym visitor must input:<br>
            <ul>
            <li>Their full name</li>
            <li>Their age</li>
            <li>Their membership tier (1, 2, or 3)</li>
            </ul>
            Your program must:<br>
            <ul>
            <li>Greet the user by name.</li>
            <li>If they are under 16, print a rejection message and do not print their membership tier.</li>
            <li>If they are 16 or older, allow access and display their membership tier:</li>
            <ul>
            <li>Tier 1: Basic</li>
            <li>Tier 2: Premium</li>
            <li>Tier 3: VIP</li>
            <li>Any other tier: Invalid Tier</li>
            </ul>
            </ul>
            ✅ You may not use loops or methods ✅ You must use Scanner, if/else, ==, >=, nextLine() handling ✅ Stick strictly to concepts from Levels 1–9
            </div>
            <div class="level-sub-header">🧪 Example Input 1:</div>
            <div class="level-code-input">Amanda Rivera<br>22<br>2</div>
            <div class="level-sub-header">📤 Output 1:</div>
            <div class="level-code-input">Welcome, Amanda Rivera!<br>You are allowed to use the gym.<br>Your membership tier: Premium</div>
            <div class="level-sub-header">🧪 Example Input 2:</div>
            <div class="level-code-input">Kevin Tran<br>13<br>1</div>
            <div class="level-sub-header">📤 Output 2:</div>
            <div class="level-code-input">Welcome, Kevin Tran!<br>You are not allowed to use the gym.</div>'
            ,
            //level 11
            '<div class="level-header">Repeating Tasks with while Loops + Using nextLine() for String Input</div>
            <div class="level-sub-header">🔁 while Loop Syntax</div>
            <div class="level-content">The while loop repeats a block of code as long as the condition is true:</div>
            <div class="level-code-input">
            while (condition) {<br>
            // this block will repeat<br>
            }
            </div>
            <div class="level-content">The condition must eventually become false, or the loop will run forever.</div>
            <div class="level-sub-header">⚠️ Common Mistake:</div>
            <div class="level-content">Make sure to change something inside the loop that affects the condition. Otherwise, you get an infinite loop!</div>
            <div class="level-sub-header">💬 String Reminder:</div>
            <div class="level-content">In this realm, you\'ll often work with text. Use nextLine() to read a full line of input — including spaces!</div>'
            ,
            //level 12
            '<div class="level-header">Repeating with do-while Loops</div>
            <div class="level-sub-header">🔁 Syntax of a do-while Loop</div>
            <div class="level-code-input">
            do {<br>
            // block of code runs first<br>
            } while (condition);
            </div>
            <div class="level-content">✅ Runs once before checking the condition ✅ Keeps running as long as the condition is true ⚠️ Don’t forget the semicolon after the condition</div>'
            ,
            //level 13
            '<div class="level-header">Controlled Repetition with for Loops</div>
            <div class="level-sub-header">🔁 for Loop Syntax:</div>
            <div class="level-code-input">
            for (initialization; condition; update) {<br>
            // code to repeat<br>
            }
            </div>
            <div class="level-content">Each part:<br>
            <ul>
            <li>initialization: runs once at the start (e.g., int i = 0)</li>
            <li>condition: checked before each loop (e.g., i < 5)</li>
            <li>update: runs after every loop cycle (e.g., i++)</li>
            </ul>
            </div>
            <div class="level-content">✅ Great for counting up or down ✅ Preferred when number of repetitions is known</div>'
            ,
            //level 14
            '<div class="level-header">Controlling Loop Flow with break and continue</div>
            <div class="level-sub-header">🚪 break Statement</div>
            <div class="level-content">Purpose: Immediately exits a loop.<br>Use it when a condition is met and no further looping is needed.</div>
            <div class="level-sub-header">⏭️ continue Statement</div>
            <div class="level-content">Purpose: Skips the current iteration and moves to the next one.<br>Useful for skipping certain values.</div>
            <div class="level-content">⚠️ break stops the loop entirely ⚠️ continue skips to the next loop cycle</div>'
            ,
            //level 15
            '<div class="level-header">Student Attendance Checker</div>
            <div class="level-content">You’re building a simple attendance checker for a classroom.<br>
            Requirements:<br>
            <ul>
            <li>The user must enter how many students are in the class.</li>
            <li>Use a for loop to ask each student’s name and whether they are present (Y) or absent (N).</li>
            <li>Keep track of how many students are present and absent.</li>
            <li>If the user enters an invalid response (not Y or N), use continue to ask that same student again.</li>
            <li>If “STOP” is entered as a name, break the loop immediately — no more students will be asked.</li>
            <li>At the end, print the total present, absent, and total students checked.</li>
            </ul>
            </div>
            <div class="level-sub-header">🧪 Example Input 1:</div>
            <div class="level-code-input">3<br>Alice<br>Y<br>Bob<br>N<br>Charlie<br>Y</div>
            <div class="level-sub-header">📤 Output 1:</div>
            <div class="level-code-input">How many students?<br>3<br>Student 1 name: Alice<br>Is Alice present? (Y/N): Y<br>Student 2 name: Bob<br>Is Bob present? (Y/N): N<br>Student 3 name: Charlie<br>Is Charlie present? (Y/N): Y<br>Attendance Summary:<br>Present: 2<br>Absent: 1<br>Total Checked: 3</div>

            <div class="level-sub-header">🧪 Example Input 2 (using STOP):</div>
            <div class="level-code-input">5<br>Anna<br>Y<br>STOP</div>
            <div class="level-sub-header">📤 Output 2:</div>
            <div class="level-code-input">How many students?<br>5<br>Student 1 name: Anna<br>Is Anna present? (Y/N): Y<br>Student 2 name: STOP<br>Attendance Summary:<br>Present: 1<br>Absent: 0<br>Total Checked: 1</div>

            <div class="level-sub-header">🧪 Example Input 3 (invalid input + continue):</div>
            <div class="level-code-input">2<br>David<br>Maybe<br>Y<br>Lily<br>N</div>
            <div class="level-sub-header">📤 Output 3:</div>
            <div class="level-code-input">How many students?<br>2<br>Student 1 name: David<br>Is David present? (Y/N): Maybe<br>Is David present? (Y/N): Y<br>Student 2 name: Lily<br>Is Lily present? (Y/N): N<br>Attendance Summary:<br>Present: 1<br>Absent: 1<br>Total Checked: 2</div>
            '
            ,
            //level 16
            '<div class="level-header">What is a Method?</div>
            <div class="level-content">📌 What is a Method?<br>
            A method is a block of code that:<br>
            <ul>
            <li>Has a name</li>
            <li>Can be called (run) when needed</li>
            <li>Can accept parameters (optional)</li>
            <li>Can return a value or void (no return)</li>
            </ul>
            🗂️ Why use Methods?<br>
            ✅ Organize code ✅ Avoid repetition ✅ Make code reusable
            </div>'
            ,
            //level 17
            '<div class="level-header">Methods with Multiple Parameters</div>
            <div class="level-content">📌 What Are Parameters?<br>
            Parameters are variables listed in a method’s definition.<br>
            They let you pass different values into a method each time you call it.<br>
            A method can have zero, one, or many parameters.
            </div>'
            ,
            //level 18
            '<div class="level-header">Doing Things with void Methods</div>
            <div class="level-content">📌 What is a void Method?<br>
            A void method:<br>
            <ul>
            <li>Performs an action</li>
            <li>Does not return a value to the caller</li>
            <li>Uses the keyword void instead of a data type</li>
            </ul>
            🗂️ When to Use void Methods?<br>
            ✅ When you want to print output directly ✅ When you want to perform an action without needing a result back
            </div>'
            ,
            //level 19
            '<div class="level-header">Organizing with Multiple void Methods</div>
            <div class="level-content">📌 Why Use Multiple Methods?<br>
            ✅ Organize related tasks ✅ Make code easier to read and maintain ✅ Reuse common actions (like printing or checking conditions)
            </div>'
            ,
            //level 20
            '<div class="level-header">Student Grade Calculator</div>
            <div class="level-content">Create a Student Grade Calculator program that does the following:<br>
            1️⃣ In main, the user is asked for a student’s name and the number of subjects they took.<br>
            2️⃣ Use a void method to greet the student by name.<br>
            3️⃣ Use a method that collects all the scores and calculates the average — this method must:<br>
            <ul>
            <li>Accept the number of subjects as a parameter.</li>
            <li>Use a loop to collect scores.</li>
            <li>Return the average score as a double.</li>
            </ul>
            4️⃣ Use another void method that prints a final message:<br>
            <ul>
            <li>If the average is 75 or higher: “Congratulations, you passed!”</li>
            <li>If the average is below 75: “You need to improve next time.”</li>
            </ul>
            </div>
            <div class="level-sub-header">🧪 Example Input 1:</div>
            <div class="level-code-input">Alex<br>3<br>80<br>70<br>85</div>
            <div class="level-sub-header">📤 Output 1:</div>
            <div class="level-code-input">Enter student name: Alex<br>Enter number of subjects: 3<br>Hello, Alex!<br>Enter score for subject 1: 80<br>Enter score for subject 2: 70<br>Enter score for subject 3: 85<br>Your average score is: 78.33333333333333<br>Congratulations, you passed!</div>

            <div class="level-sub-header">🧪 Example Input 2:</div>
            <div class="level-code-input">Bella<br>2<br>60<br>70</div>
            <div class="level-sub-header">📤 Output 2:</div>
            <div class="level-code-input">Enter student name: Bella<br>Enter number of subjects: 2<br>Hello, Bella!<br>Enter score for subject 1: 60<br>Enter score for subject 2: 70<br>Your average score is: 65.0<br>You need to improve next time.</div>

            <div class="level-sub-header">🧪 Example Input 3:</div>
            <div class="level-code-input">Charlie<br>1<br>75</div>
            <div class="level-sub-header">📤 Output 3:</div>
            <div class="level-code-input">Enter student name: Charlie<br>Enter number of subjects: 1<br>Hello, Charlie!<br>Enter score for subject 1: 75<br>Your average score is: 75.0<br>Congratulations, you passed!</div>
            '
        ];

        $answers = [
            'Welcome, Amanda Rivera!\nYou are allowed to use the gym.\nYour membership tier: Premium',
            'How many students?\n3\nStudent 1 name: Alice\nIs Alice present? (Y/N): Y\nStudent 2 name: Bob\nIs Bob present? (Y/N): N\nStudent 3 name: Charlie\nIs Charlie present? (Y/N): Y\nAttendance Summary:\nPresent: 2\nAbsent: 1\nTotal Checked: 3',
            'Enter student name: Alex\nEnter number of subjects: 3\nHello, Alex!\nEnter score for subject 1: 80\nEnter score for subject 2: 70\nEnter score for subject 3: 85\nYour average score is: 78.33333333333333\nCongratulations, you passed!'
        ];
        $inputs = [
            'Amanda Rivera\n22\n2\n', 
            '3\nAlice\nY\nBob\nN\nCharlie\nY\n',
            'Alex\n3\n80\n70\n85\n'
        ];
        $bossIndex = 0;
        for ($i = 0; $i < count($titles); $i++) {
            if($i + 1 == 10 || $i + 1 == 15 || $i + 1 ==20){
                DB::table('levels')->insert([
                    'course_id' => 3, // Java course_id is 3
                    'number' => $i + 1,
                    'title' => $titles[$i],
                    'content' => $contents[$i],
                    'answer' => $answers[$bossIndex],
                    'input' => $inputs[$bossIndex],
                    'point' => 100
                ]);
                $bossIndex++;
            }
            else{
                DB::table('levels')->insert([
                    'course_id' => 3, // Java course_id is 3
                    'number' => $i + 1,
                    'title' => $titles[$i],
                    'content' => $contents[$i],
                    'point' => 25
                ]);
            }
        }
    }
}