<?php

namespace Database\Seeders\QuestionSeeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PythonQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            // Level 1: Printing Your First Message!
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is the correct code to print Hello, world!?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. print("Hello, world!")</li><li class="question-choice">B. Hello, world!</li><li class="question-choice">C. print Hello, world!</li><li class="question-choice">D. "print("Hello, world!")"</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to print Hello, world!</div><div class="level-code-input">print(________)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will this code output?</div><div class="level-code-input">print("Python is fun!")</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. print("Python is fun!")</li><li class="question-choice">B. Python is fun!</li><li class="question-choice">C. Python is</li><li class="question-choice">D. Syntax Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to print I Love Pizza</div><div class="level-code-input">________(“I Love Pizza”)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 2: Comments & Variables
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is a valid Python comment?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. // This is a comment</li><li class="question-choice">B. # This is a comment</li><li class="question-choice">C. -- This is a comment</li><li class="question-choice">D. /* This is a comment */</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to print the color Blue.</div><div class="level-code-input">color = __________<br>print(color)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will be the output of the following code?</div><div class="level-code-input">x = "Python"<br>print(x)</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Python</li><li class="question-choice">B. x</li><li class="question-choice">C. print(x)</li><li class="question-choice">D. Syntax Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete the code to declare a variable age with value 25</div><div class="level-code-input">___________<br>print(age)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 3: Data Types & Operations
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is the correct syntax to divide 6 by 2?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 6 / 2</li><li class="question-choice">B. 2 / 6</li><li class="question-choice">C. /62</li><li class="question-choice">D. 62/</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to Multiply 3 and 4.</div><div class="level-code-input">print(3 ___ 4)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the data type for 0.5?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. String</li><li class="question-choice">B. Integer</li><li class="question-choice">C. Float</li><li class="question-choice">D. Boolean</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill the float type pi with 3.14</div><div class="level-code-input">___________<br>print(pi)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 4: String Concatenation & Repetition
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of “Hi" * 2?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Error</li><li class="question-choice">B. Hi2</li><li class="question-choice">C. "HiHi"</li><li class="question-choice">D. HiHi</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to Repeat A 4 times.</div><div class="level-code-input">print(______)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of "Hello" + "World"?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. HelloWorld</li><li class="question-choice">B. Hello World</li><li class="question-choice">C. Hello+World</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete the code to make the sentence Good Morning</div><div class="level-code-input">print("Good" + “ “  ________)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 5: Type Casting
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is the correct way to Convert string to an int?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. str(100)</li><li class="question-choice">B. float(100)</li><li class="question-choice">C. int(“100”)</li><li class="question-choice">D. int(100)</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to convert 5 to string.</div><div class="level-code-input">print(____(“5”))</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of int("3") + 2?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 5</li><li class="question-choice">B. "32"</li><li class="question-choice">C. 3</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to convert 9 to float</div><div class="level-code-input">print(________)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 6: Getting User Input
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does input("Age? ") do?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Print age</li><li class="question-choice">B. Ask user for input</li><li class="question-choice">C. Store 0</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete the code to ask the user\'s name.</div><div class="level-code-input">name = ______("Your name: ")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">input() always returns a...?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. int</li><li class="question-choice">B. string</li><li class="question-choice">C. bool</li><li class="question-choice">D. float</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete the code to ask the questions “how was your day?”.</div><div class="level-code-input">answer = _______________________</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 7: Naming Variables Properly
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is a valid variable name?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 1name</li><li class="question-choice">B. my-name</li><li class="question-choice">C. full name</li><li class="question-choice">D. _name</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Declare a variable named highScore.</div><div class="level-code-input">____________ = 99</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">2cool is an invalid variable name. Which of the following is a valid replacement?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. cool2</li><li class="question-choice">B. cool2$</li><li class="question-choice">C. cool 2</li><li class="question-choice">D. cool@2</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Declare a variable named score1</div><div class="level-code-input">____ = 100</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 8: Customizing print() with sep and end
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does print("X", "Y", sep=":") print?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. XY</li><li class="question-choice">B. X Y</li><li class="question-choice">C. X:Y</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to join 1 and 2 with -.</div><div class="level-code-input">print("1", "2", _______)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will end=" " do?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Print new line</li><li class="question-choice">B. Separate lines</li><li class="question-choice">C. Keep on same line</li><li class="question-choice">D. Throw error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to print without newline</div><div class="level-code-input">print("Hi", ______)<br>print(“John”)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 9: Special Characters in Strings
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does \\n do?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Space</li><li class="question-choice">B. Tab</li><li class="question-choice">C. Print slash</li><li class="question-choice">D. Newline</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to Print She said: "Hi".</div><div class="level-code-input">print("She said: ________")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will print("A\\tB") print?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. A\tB</li><li class="question-choice">B. AB</li><li class="question-choice">C. A      B</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to print with a tab space in between</div><div class="level-code-input">print("Day:___Monday")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 10 is a boss level and has no questions in the document.

            // Level 11: Conditionals (if, elif, else)
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will this code print?</div><div class="level-code-input">score = 90<br>if score > 95:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Excellent")<br>elif score >= 80:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Good")<br>else:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Keep trying")</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Excellent</li><li class="question-choice">B. Good</li><li class="question-choice">C. Keep trying</li><li class="question-choice">D. Nothing</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to print “Teen” when age is between 13 and 19:</div><div class="level-code-input">age = 19<br>if age >= 13 and _____:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Teen")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does the operator != mean?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Greater than</li><li class="question-choice">B. Equal</li><li class="question-choice">C. Not equal</li><li class="question-choice">D. Less than or equal</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete this code to make another condition to print B</div><div class="level-code-input">if score > 90:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("A")<br>_____ score >= 80:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("B")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 12: Nested if and Multi-Path Decisions
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output of this code?</div><div class="level-code-input">temperature = 30<br>weather = "sunny"<br><br>if weather == "sunny":<br>&nbsp;&nbsp;&nbsp;&nbsp;if temperature > 25:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Wear sunglasses")<br>&nbsp;&nbsp;&nbsp;&nbsp;else:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Bring a light jacket")<br>else:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Check the weather forecast")</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Wear sunglasses</li><li class="question-choice">B. Bring a light jacket</li><li class="question-choice">C. Check the weather forecast</li><li class="question-choice">D. Nothing is printed</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blanks to print “Open” only if the store is in "Jakarta" and the time is greater than equal to 9 and less than equal to 17:</div><div class="level-code-input">location = “Jakarta”<br>time = 13<br><br>if location == "Jakarta":<br>&nbsp;&nbsp;&nbsp;&nbsp;_____________:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Open")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is a correct nested if structure?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. if level == "admin":<br>print("Access granted")<br>elif password == "1234":<br>print("Welcome")</li><li class="question-choice">B. if level == "admin": print("Admin") elif password == "1234": print("Access")</li><li class="question-choice">C. if level == "admin":<br>if password == "1234":<br>print("Access granted")</li><li class="question-choice">D. if level == "admin":<br>&nbsp;&nbsp;&nbsp;&nbsp;if password == "1234":<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Access granted")</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Finish the nested if so it prints “Free snack” only for students in “Jakarta” with an ID.</div><div class="level-code-input">city = “Jakarta”<br>is_student = “yes”<br>has_id = “yes”<br><br>if city == "Jakarta":<br>&nbsp;&nbsp;&nbsp;&nbsp;if is_student == "yes":<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Free snack")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 13: Repeating with while
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output of this code?</div><div class="level-code-input">i = 0<br>while i < 3:<br>&nbsp;&nbsp;&nbsp;&nbsp;print(i)<br>&nbsp;&nbsp;&nbsp;&nbsp;i += 1</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 0 1 2 3</li><li class="question-choice">B. 1 2 3</li><li class="question-choice">C. 0 1 2</li><li class="question-choice">D. Infinite loop</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to make the loop print "Go!" 5 times.</div><div class="level-code-input">count = 0<br>________:<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Go!")<br>&nbsp;&nbsp;&nbsp;&nbsp;count += 1</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What keyword is used to stop a while loop?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. stop</li><li class="question-choice">B. break</li><li class="question-choice">C. exit</li><li class="question-choice">D. return</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete the code to exit the loop when user types stop:</div><div class="level-code-input">while True:<br>&nbsp;&nbsp;&nbsp;&nbsp;command = input("Say something: ")<br>&nbsp;&nbsp;&nbsp;&nbsp;if command == "stop":<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 14: for loop: Repeating with a Range
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output of this code?</div><div class="level-code-input">for i in range(3):<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Hi")</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Hi<br>Hi<br>Hi</li><li class="question-choice">B. Hi Hi Hi</li><li class="question-choice">C. Hi<br>Hi</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to print the numbers 5, 6, 7.</div><div class="level-code-input">__________:<br>&nbsp;&nbsp;&nbsp;&nbsp;print(i)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does for i in range (0, 6, 2) produce?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 0<br>2<br>4<br>6</li><li class="question-choice">B. 2<br>4<br>5</li><li class="question-choice">C. 2<br>3<br>4<br>5</li><li class="question-choice">D. 0<br>2<br>4</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Write a for loop to calculate and print the sum of numbers 1 to 4:</div><div class="level-code-input">total = 0<br>for i in _____:<br>&nbsp;&nbsp;&nbsp;&nbsp;total += i<br>print("Total:", total)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 15 is a boss level and has no questions in the document.

            // Level 16: Introduction to Functions
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does the following code do?</div><div class="level-code-input">def greet():<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Hi!")<br>greet()</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Defines a variable</li><li class="question-choice">B. Defines and calls a function</li><li class="question-choice">C. Defines a loop</li><li class="question-choice">D. Creates a class</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blanks to define and call a function that prints “Good morning!”</div><div class="level-code-input">____ good_morning():<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Good morning!")<br>good_morning()</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is a correct way to define a function?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. function greet():</li><li class="question-choice">B. define greet():</li><li class="question-choice">C. def greet():</li><li class="question-choice">D. func greet()</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Call this function to print Hello!.</div><div class="level-code-input">def say_hello():<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Hello!")<br>________</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 17: Functions with Parameters
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does this code print?</div><div class="level-code-input">def greet(person):<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Hello,", person)<br>greet("Ali")</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Hello Ali</li><li class="question-choice">B. Hello person</li><li class="question-choice">C. greet Ali</li><li class="question-choice">D. Nothing is printed</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete the function that prints a name and age</div><div class="level-code-input">def show_info(________):<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Name:", name)<br>&nbsp;&nbsp;&nbsp;&nbsp;print("Age:", age)<br>show_info(“Lina”, 20)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which function takes two parameters?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. def greet():</li><li class="question-choice">B. def show(name):</li><li class="question-choice">C. def add(x, y):</li><li class="question-choice">D. def print_hello:</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Call the function show_message and pass in your own text</div><div class="level-code-input">def show_message(text):<br>&nbsp;&nbsp;&nbsp;&nbsp;print(">>", text)<br>_____("Welcome!")</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 18: Functions with Return Values
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does return do in a function?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Stops the loop</li><li class="question-choice">B. Repeats the function</li><li class="question-choice">C. Prints the output</li><li class="question-choice">D. Sends a result back</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Complete the function that returns the length of a word</div><div class="level-code-input">def word_length(word):<br>&nbsp;&nbsp;&nbsp;&nbsp;_____ len(word)<br>print(word_length(“Pizza”))</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is wrong with this code?</div><div class="level-code-input">def double(x):<br>return x * 2<br>print(double(3))</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. The function name is invalid</li><li class="question-choice">B. return should be in uppercase</li><li class="question-choice">C. The function call is incorrect</li><li class="question-choice">D. The return line is not indented properly</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to store the result of the function call</div><div class="level-code-input">def triple(n):<br>&nbsp;&nbsp;&nbsp;&nbsp;return n * 3<br>result = _____(4)<br>print("Triple is", result)</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 19: Functions with Parameters and Return Values
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will this code return?</div><div class="level-code-input">def power(base, exponent):<br>&nbsp;&nbsp;&nbsp;&nbsp;return base ** exponent<br>print(power(2, 3))</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 6</li><li class="question-choice">B. Error</li><li class="question-choice">C. 9</li><li class="question-choice">D. 8</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Finish this function that calculates total price.</div><div class="level-code-input">def total_price(price, quantity):<br>&nbsp;&nbsp;&nbsp;&nbsp;___________________<br>print(total_price(5, 9))</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of these functions correctly accepts two inputs and returns their sum?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. def add(a + b):<br>return a + b</li><li class="question-choice">B. def add(a, b):<br>return a + b</li><li class="question-choice">C. def add(a, b):<br>print(a + b)</li><li class="question-choice">D. def add:<br>return a + b</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Input:</div><div class="level-code-input">def check_pass(score):<br>&nbsp;&nbsp;&nbsp;&nbsp;if score >= 75:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____<br>&nbsp;&nbsp;&nbsp;&nbsp;else:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return "Fail"<br>print(check_pass(80))</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 20 is a boss level and has no questions in the document.
        ];

        $answers = [
            // Level 1
            'A. print("Hello, world!")',
            '"Hello, world!"',
            'B. Python is fun!',
            'print',

            // Level 2
            'B. # This is a comment',
            '"Blue"',
            'A. Python',
            'age = 25',

            // Level 3
            'A. 6 / 2',
            '*',
            'C. Float',
            'pi = 3.14',

            // Level 4
            'D. HiHi',
            '"A" * 4',
            'A. HelloWorld',
            '+ “Morning”',

            // Level 5
            'C. int(“100”)',
            'str',
            'A. 5',
            'float(9)',

            // Level 6
            'B. Ask user for input',
            'input',
            'B. string',
            'input(“how was your day?”)',

            // Level 7
            'D. _name',
            'highScore',
            'A. cool2',
            'score1',

            // Level 8
            'C. X:Y',
            'sep = “-”',
            'C. Keep on same line',
            'end=" "',

            // Level 9
            'D. Newline',
            '\\"Hi\\"',
            'C. A      B',
            '\\t',

            // Level 10 has no questions.

            // Level 11
            'B. Good',
            'age <= 19',
            'C. Not equal',
            'elif',

            // Level 12
            'A. Wear sunglasses',
            'if time >= 9 and time <= 17',
            'D. if level == "admin":<br>&nbsp;&nbsp;&nbsp;&nbsp;if password == "1234":<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print("Access granted")',
            'if has_id == "yes"',

            // Level 13
            'C. 0 1 2',
            'while count < 5',
            'B. break',
            'break',

            // Level 14
            'A. Hi<br>Hi<br>Hi',
            'for i in range(5, 8)',
            'D. 0<br>2<br>4',
            'range(1, 5)',

            // Level 15 has no questions.

            // Level 16
            'B. Defines and calls a function',
            'def',
            'C. def greet():',
            'say_hello()',

            // Level 17
            'A. Hello Ali',
            'name, age',
            'C. def add(x, y):',
            'show_message',

            // Level 18
            'D. Sends a result back',
            'return',
            'D. The return line is not indented properly',
            'triple',

            // Level 19
            'D. 8',
            'return price * quantity',
            'B. def add(a, b):<br>return a + b',
            'return "Pass"',

            // Level 20 has no questions.
        ];

        $number = 1;
        $levelId = 41; // Python levels start from ID 41
        $index = 0;
        foreach ($contents as $content) {
            DB::table('questions')->insert([
                'level_id' => $levelId,
                'number' => $number,
                'content' => $content,
                'answer' => $answers[$index]
            ]);
            $number++;
            $index++;
            if ($number == 5){
                $number = 1;
                $levelId++;
                if ($levelId == 50 || $levelId == 55 || $levelId == 60) $levelId++; // Skip boss levels (50=level 10, 55=level 15, 60=level 20)
            }
        }
    }
}