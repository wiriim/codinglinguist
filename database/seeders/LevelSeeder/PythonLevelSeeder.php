<?php

namespace Database\Seeders\LevelSeeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PythonLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Printing Your First Message!',
            'Comments & Variables',
            'Data Types & Operations',
            'String Concatenation & Repetition',
            'Type Casting',
            'Getting User Input',
            'Naming Variables Properly',
            'Customizing print() with sep and end',
            'Special Characters in Strings',
            'Movie Ticket Counter',
            'Conditionals (if, elif, else)',
            'Nested if and Multi-Path Decisions',
            'Repeating with while',
            'for loop: Repeating with a Range',
            'Student Exam Score Tracker',
            'Introduction to Functions',
            'Functions with Parameters',
            'Functions with Return Values',
            'Functions with Parameters and Return Values',
            'Simple Bank System',
        ];

        $contents = [
            // Level 1
            '<div class="level-header">Printing Your First Message!</div>
            <div class="level-content">One of the first things in Python is printing a message.<br>Use the print() function to display output on the screen. The text must be inside quotes(“ “).</div>
            <div class="level-sub-header">Example:</div>
            <div class="level-code-input">print("Hello, world!")</div>
            <div class="level-sub-header">Output</div>
            <div class="level-code-input">Hello, world!</div>'
            ,
            // Level 2
            '<div class="level-header">Comments & Variables</div>
            <div class="level-content">In Python, comments start with a # symbol. They are ignored by Python and are used to explain your code.<br>Variables are containers for storing data. You don’t need to declare a type, just assign a value using =.</div>
            <div class="level-sub-header">Example:</div>
            <div class="level-code-input"># This is a comment<br># String<br>name = "John Doe"<br>print(name)<br><br># Integer<br>number = 67<br>print(number)<br><br># Float<br>height = 170.5<br>print(height)<br><br># Boolean<br>is_student = True<br>print(is_student)<br><br># List<br>scores = [90, 85, 88]<br>print(scores)</div>
            <div class="level-sub-header">Output:</div>
            <div class="level-code-input">John Doe<br>67<br>170.5<br>True<br>[90, 85, 88]</div>'
            ,
            //level 3
            '<div class="level-header">Data Types & Operations</div>
            <div class="level-content">Python has several data types. The most basic ones:
            <ul>
            <li>String (str): Text. Must be in quotes. "hello"</li>
            <li>Integer (int): Whole numbers like 1, 200</li>
            <li>Float (float): Decimal numbers like 3.14, 0.5</li>
            <li>Boolean (bool): Either True or False</li>
            </ul>
            You can perform basic math with operators:
            <ul>
            <li>+ Addition</li>
            <li>- Subtraction</li>
            <li>* Multiplication</li>
            <li>/ Division</li>
            </ul>
            </div>'
            ,
            //level 4
            '<div class="level-header">String Concatenation & Repetition</div>
            <div class="level-content">You can use + to concatenate (join) strings and * to repeat them.</div>
            <div class="level-sub-header">Example:</div>
            <div class="level-code-input">greeting = "Hello"<br>name = "Alice"<br>print(greeting + " " + name)<br><br>print("ha" * 3)</div>
            <div class="level-sub-header">Output:</div>
            <div class="level-code-input">Hello Alice<br>hahaha</div>'
            ,
            //level 5
            '<div class="level-header">Type Casting</div>
            <div class="level-content">Sometimes, you need to convert values between types. This is called type casting.<br>Python provides built-in functions:
            <ul>
            <li>str() – Convert to string</li>
            <li>int() – Convert to integer</li>
            <li>float() – Convert to float</li>
            </ul>
            </div>
            <div class="level-sub-header">Example:</div>
            <div class="level-code-input">age = 20<br>print("You are " + str(age))</div>
            <div class="level-sub-header">Output:</div>
            <div class="level-code-input">You are 20</div>'
            ,
            //level 6
            '<div class="level-header">Getting User Input</div>
            <div class="level-content">Use input() to get information from the user. Whatever the user types is returned as a string.</div>
            <div class="level-sub-header">Example:</div>
            <div class="level-code-input">name = input("What is your name? ")<br>print("Hi " + name)</div>
            <div class="level-sub-header">Input:</div>
            <div class="level-code-input">Juli</div>
            <div class="level-sub-header">Output:</div>
            <div class="level-code-input">Hi Juli</div>
            <div class="level-content">Note: Even if you type a number, Python treats it as a string. Use int() or float() to convert it:</div>
            <div class="level-code-input">age = int(input("Enter your age: "))</div>'
            ,
            //level 7
            '<div class="level-header">Naming Variables Properly</div>
            <div class="level-content">Variable names must follow certain rules:
            <ul>
            <li>✅ Start with a letter or underscore (_)</li>
            <li>✅ Can contain letters, numbers, and underscores</li>
            <li>❌ Cannot start with a number</li>
            <li>❌ Cannot have spaces or special symbols like -, @, etc.</li>
            </ul>
            </div>'
            ,
            //level 8
            '<div class="level-header">Customizing print() with sep and end</div>
            <div class="level-content">Python lets you customize print():
            <ul>
            <li>sep: changes the separator between multiple items</li>
            <li>end: changes what is printed at the end (default is newline)</li>
            </ul>
            </div>
            <div class="level-sub-header">Example:</div>
            <div class="level-code-input">print("2024", "06", "20", sep="-")<br>print("Hello", end=" ")<br>print("World")</div>
            <div class="level-sub-header">Output:</div>
            <div class="level-code-input">2024-06-20<br>Hello World</div>'
            ,
            //level 9
            '<div class="level-header">Special Characters in Strings</div>
            <div class="level-content">Some characters can\'t be typed directly. Use a backslash (\) to add:
            <ul>
            <li>\\n → new line</li>
            <li>\\t → tab (indentation)</li>
            <li>\\" → double quote</li>
            </ul>
            </div>
            <div class="level-sub-header">Example:</div>
            <div class="level-code-input">print("Line 1\\nLine 2")<br>print("She said: \\"Hi!\\"")<br>print("Name:\\tAlice")</div>
            <div class="level-sub-header">Output:</div>
            <div class="level-code-input">Line 1<br>Line 2<br>She said: “Hi!”<br>Name:	 Alice</div>'
            ,
            //level 10
            '<div class="level-header">Movie Ticket Counter</div>
            <div class="level-content">You’re building a simple ticket counter system for a small movie theater. Each visitor must buy exactly 3 tickets.<br>
            Your program must:<br>
            <ul>
            <li>Ask for the visitor’s name (string, one word)</li>
            <li>Ask for the price of each ticket (3 times, integer)</li>
            <li>apply a 10% discount</li>
            <li>Show the final amount to pay</li>
            </ul>
            </div>
            <div class="level-sub-header">Example Input 1:</div>
            <div class="level-code-input">Alice<br>35000<br>40000<br>30000</div>
            <div class="level-sub-header">Expected Output 1:</div>
            <div class="level-code-input">Final Price: 94500</div>
            <div class="level-sub-header">Example Input 2:</div>
            <div class="level-code-input">Bob<br>20000<br>25000<br>30000</div>
            <div class="level-sub-header">Expected Output 2:</div>
            <div class="level-code-input">Final Price: 67500</div>'
            ,
            //level 11
            '<div class="level-header">Conditionals (if, elif, else)</div>
            <div class="level-content">Python uses the if keyword to run code only when a condition is true:<br>
            <div class="level-code-input">age = 18<br>if age >= 17:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("You can watch the movie")</div>
            Use else to run code when the condition is false:<br>
            <div class="level-code-input">age = 15<br>if age >= 17:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("You can watch the movie")<br>else:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Sorry, you\'re too young")</div>
            Use elif (short for “else if”) to check another condition:<br>
            <div class="level-code-input">age = 16<br>if age >= 18:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Adult")<br>elif age >= 13:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Teen")<br>else:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Child")</div>
            </div>'
            ,
            //level 12
            '<div class="level-header">Nested if and Multi-Path Decisions</div>
            <div class="level-content">Sometimes you want to check more than one possibility. You can chain multiple conditions using elif, but you can also nest/put if statements inside other ifs:</div>
            <div class="level-code-input">if age >= 18:<br>&nbsp;&nbsp;&nbsp;&nbsp;if age >= 60:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Older adult")<br>&nbsp;&nbsp;&nbsp;&nbsp;else:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Young adult")</div>'
            ,
            //level 13
            '<div class="level-header">Repeating with while</div>
            <div class="level-content">The while loop repeats a block of code as long as a condition is True:<br>
            Basic format:<br>
            <div class="level-code-input">count = 1<br>while count <= 3:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Hello")<br>&nbsp;&nbsp;&nbsp;&nbsp;count += 1</div>
            🖨 Output: Hello Hello Hello<br>
            Important: Make sure to update a variable inside the loop, or it may run forever.<br>
            You can also use the break keyword to stop the loop.
            </div>'
            ,
            //level 14
            '<div class="level-header">for loop: Repeating with a Range</div>
            <div class="level-content">In Python, a for loop is used to repeat something a certain number of times — especially when you know how many times you want to loop.<br>
            Basic format:<br>
            <div class="level-code-input">for i in range(5):<br>&nbsp;&nbsp;&nbsp;&nbsp;print(i)</div>
            Output:<br>
            <div class="level-code-input">0<br>1<br>2<br>3<br>4</div>
            Note: range(5) goes from 0 up to (but not including) 5.
            </div>'
            ,
            //level 15
            '<div class="level-header">Student Exam Score Tracker</div>
            <div class="level-content">You’re building a small system to track student exam scores.<br>
            Each student may have a different number of exam scores. Your task:<br>
            <ul>
            <li>Ask the student’s name.</li>
            <li>Ask how many scores the student has.</li>
            <li>Using a for loop, input each score (integer).</li>
            <li>If any score is below 40, print: "Student [name] must retake the exam."</li>
            <li>Otherwise, calculate the average score:
            <ul>
            <li>- If average ≥ 60: print "Student [name]: Pass (Average: X)"</li>
            <li>- Else: print "Student [name]: Fail (Average: X)"</li>
            </ul>
            </li>
            </ul>
            </div>
            <div class="level-sub-header">Example Input 1:</div>
            <div class="level-code-input">Farah<br>3<br>70<br>65<br>80</div>
            <div class="level-sub-header">Expected Output 1:</div>
            <div class="level-code-input">Student Farah: Pass (Average: 71)</div>
            <div class="level-sub-header">Example Input 2:</div>
            <div class="level-code-input">Iqbal<br>3<br>60<br>38<br>70</div>
            <div class="level-sub-header">Expected Output 2:</div>
            <div class="level-code-input">Student Iqbal must retake the exam.</div>
            <div class="level-sub-header">Example Input 3:</div>
            <div class="level-code-input">Nina<br>4<br>50<br>60<br>55<br>58</div>
            <div class="level-sub-header">Expected Output 3:</div>
            <div class="level-code-input">Student Nina: Fail (Average: 55)</div>'
            ,
            //level 16
            '<div class="level-header">Introduction to Functions</div>
            <div class="level-content">In Python, a function is a block of code that only runs when it is called.<br>
            You can use functions to organize your code, avoid repetition, and make things more readable.<br>
            Here’s how to define a simple function:<br>
            <div class="level-code-input">def greet():<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Hello!")</div>
            To call (or run) the function:<br>
            <div class="level-code-input">greet()</div>
            Output:<br>
            <div class="level-code-input">Hello!</div>
            </div>'
            ,
            //level 17
            '<div class="level-header">Functions with Parameters</div>
            <div class="level-content">In the previous level, you learned how to define and call a function. But what if we want the function to use different input values?<br>
            You can give a function information by using parameters.<br>
            Here’s the basic format:<br>
            <div class="level-code-input">def greet(name):<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Hello,", name)</div>
            </div>'
            ,
            //level 18
            '<div class="level-header">Functions with Return Values</div>
            <div class="level-content">In earlier levels, you learned to define and call functions, and how to pass parameters.<br>
            Now let’s learn how to get a value back from a function using return.<br>
            A return value lets a function send back a result.<br>
            Here’s the basic format:<br>
            <div class="level-code-input">def square(n):<br>&nbsp;&nbsp;&nbsp;&nbsp;return n * n<br><br>result = square(4)<br>print("Square is", result)</div>
            </div>'
            ,
            //level 19
            '<div class="level-header">Functions with Parameters and Return Values</div>
            <div class="level-content">Now you’ll combine what you’ve learned: functions that accept parameters and return values.<br>
            This pattern is powerful — you give the function data, it processes it, and gives you a result.<br>
            Example:<br>
            <div class="level-code-input">def calculate_area(length, width):<br>&nbsp;&nbsp;&nbsp;&nbsp;return length * width<br><br>area = calculate_area(5, 3)<br>print("Area:", area)</div>
            </div>'
            ,
            //level 20
            '<div class="level-header">Simple Bank System</div>
            <div class="level-content">You’re building a simple bank system using functions. Your program should:<br>
            <ul>
            <li>Ask the user for their name.</li>
            <li>Ask for their starting balance (integer).</li>
            <li>Ask how many transactions they want to make.</li>
            <li>For each transaction:
            <ul>
            <li>– Ask for the transaction amount (can be positive or negative)</li>
            <li>– Update the balance using a function</li>
            </ul>
            </li>
            <li>After all transactions, display the final balance using another function.</li>
            </ul>
            </div>
            <div class="level-sub-header">Example Input 1:</div>
            <div class="level-code-input">Ali<br>1000<br>3<br>-200<br>150<br>-100</div>
            <div class="level-sub-header">Expected Output 1:</div>
            <div class="level-code-input">Customer: Ali<br>Final balance: 850</div>
            <div class="level-sub-header">Example Input 2:</div>
            <div class="level-code-input">Nina<br>500<br>2<br>300<br>-100</div>
            <div class="level-sub-header">Expected Output 2:</div>
            <div class="level-code-input">Customer: Nina<br>Final balance: 700</div>'
        ];

        $answers = [
            'Final Price: 94500',
            'Student Farah: Pass (Average: 71)',
            'Customer: Ali\nFinal balance: 850'
        ];
        $inputs = [
            'Alice\n35000\n40000\n30000\n',
            'Farah\n3\n70\n65\n80\n',
            'Ali\n1000\n3\n-200\n150\n-100\n'
        ];

        $bossIndex = 0;
        for ($i = 0; $i < count($titles); $i++) {

            if($i + 1 == 10 || $i + 1 == 15 || $i + 1 ==20){
                DB::table('levels')->insert([
                    'course_id' => 2, // Python course_id is 2
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
                    'course_id' => 2, // Python course_id is 2
                    'number' => $i + 1,
                    'title' => $titles[$i],
                    'content' => $contents[$i],
                    'point' => 25
                ]);
            }
        }
    }
}
