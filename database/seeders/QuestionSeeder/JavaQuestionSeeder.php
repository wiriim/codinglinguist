<?php

namespace Database\Seeders\QuestionSeeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JavaQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            // Level 1: First Java Program
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the correct method to print something in Java?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. echo "Hello"</li><li class="question-choice">B. print("Hello");</li><li class="question-choice">C. System.out.println("Hello");</li><li class="question-choice">D. cout << "Hello";</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which part of this Java program is the entry point?</div><div class="level-code-input">public static void main(String[] args)</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. System.out.println</li><li class="question-choice">B. main</li><li class="question-choice">C. public class</li><li class="question-choice">D. args</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the missing line to print "Java is fun!"</div><div class="level-code-input">public class Main {<br>&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix the error in this code:</div><div class="level-code-input">public class Main {<br>&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Hello world")<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 2: Variables and Data Types
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which is the correct way to declare an integer variable in Java?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. int x = 5;</li><li class="question-choice">B. integer x = 5;</li><li class="question-choice">C. x = 5;</li><li class="question-choice">D. int = 5;</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of these is the correct way to declare a string variable?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. string name = "Eva";</li><li class="question-choice">B. char name = "Eva";</li><li class="question-choice">C. String name = "Eva";</li><li class="question-choice">D. text name = Eva;</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blanks to declare and print a boolean value:</div><div class="level-code-input">public class Main {<br>&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____ isRaining = false;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(isRaining);<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix this code to declare a decimal variable and print it:</div><div class="level-code-input">public class Main {<br>&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double price = 12.5<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(price);<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 3: Getting User Input with Scanner
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which statement creates a Scanner object?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Scanner = new input();</li><li class="question-choice">B. input = new Scanner();</li><li class="question-choice">C. Scanner input = new Scanner(System.in);</li><li class="question-choice">D. Scanner(System.in);</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What method reads an integer from the user?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. input.nextInt();</li><li class="question-choice">B. input.inputInt();</li><li class="question-choice">C. input.readInt();</li><li class="question-choice">D. System.nextInt();</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blanks to input a full name from the user:</div><div class="level-code-input">Scanner input = new Scanner(System.in);<br>System.out.print("Enter full name: ");<br>String name = input.__________;</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix this code to read and print the user\'s height:</div><div class="level-code-input">import java.util.Scanner;<br><br>public class Main {<br>&nbsp;&nbsp;&nbsp;&nbsp;public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner input = new Scanner(System.in);<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Enter height: ");<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double height = input.nextDouble()<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Height: " + height);<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 4: Arithmetic Operations
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which operator is used for division?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. :</li><li class="question-choice">B. //</li><li class="question-choice">C. /</li><li class="question-choice">D. div</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of `10 % 3`?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 3</li><li class="question-choice">B. 1</li><li class="question-choice">C. 0</li><li class="question-choice">D. 7</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the missing operator to calculate the area of a rectangle.</div><div class="level-code-input">int width = 5;<br>int height = 4;<br>int area = width _____ height;</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix this code to show the correct average of two numbers as a decimal:</div><div class="level-code-input">int a = 5;<br>int b = 2;<br>double average = (a + b) / 2;<br>System.out.println(average);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 5: Type Conversion (Casting)
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of `(int) 4.9`?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 4</li><li class="question-choice">B. 5</li><li class="question-choice">C. 4.0</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which line correctly ensures a decimal result when dividing two integers?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. average = total / subjects;</li><li class="question-choice">B. average = (double) total / subjects;</li><li class="question-choice">C. average = total / (subjects as double);</li><li class="question-choice">D. average = toDouble(total / subjects);</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix this code so the average is shown as a decimal:</div><div class="level-code-input">int total = 83;<br>int count = 2;<br>double average = total / count;<br>System.out.println(average);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of this code?</div><div class="level-code-input">int a = 7;<br>int b = 2;<br>System.out.println((double) a / b);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 6: Constants and final Keyword
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What happens if you try to change a `final` variable?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Java ignores the change</li><li class="question-choice">B. Java gives a runtime error</li><li class="question-choice">C. Java gives a compile-time error</li><li class="question-choice">D. It still changes the value</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is a correctly declared constant?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. final int pi = 3.14;</li><li class="question-choice">B. int PI = 3.14;</li><li class="question-choice">C. final double PI = 3.14;</li><li class="question-choice">D. const double PI = 3.14;</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to declare a constant maximum age:</div><div class="level-code-input">_____ int MAX_AGE = 65;</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix this code so that it doesn’t give an error:</div><div class="level-code-input">final int LIMIT = 10;<br>LIMIT = 20;<br>System.out.println(LIMIT);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 7: Increment and Decrement Operators
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of the following?</div><div class="level-code-input">int i = 3;<br>int x = ++i;<br>System.out.println(x);</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 2</li><li class="question-choice">B. 3</li><li class="question-choice">C. 4</li><li class="question-choice">D. Error</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which statement is equivalent to `count = count + 1;`?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. count += 1;</li><li class="question-choice">B. count++;</li><li class="question-choice">C. ++count;</li><li class="question-choice">D. All of the above</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the value of `y` after this code runs?</div><div class="level-code-input">int x = 10;<br>int y = x--;<br>System.out.println(y);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blanks so that `b = 6` and `a = 6` after the statement:</div><div class="level-code-input">int a = 5;<br>int b = ________;</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 8: Comparison Operators
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which operator checks if two values are not equal?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. !=</li><li class="question-choice">B. ==</li><li class="question-choice">C. <></li><li class="question-choice">D. =</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the result of the following?</div><div class="level-code-input">int x = 5;<br>int y = 8;<br>System.out.println(x >= y);</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. true</li><li class="question-choice">B. false</li><li class="question-choice">C. 8</li><li class="question-choice">D. 5</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to check if `score` is `greater than or equal to` 70:</div><div class="level-code-input">if (score _____ 70) {<br>&nbsp;&nbsp;System.out.println("Passed");<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output of the following code?</div><div class="level-code-input">int age = 18;<br>System.out.println(age == 18);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 9: Conditional Statements (if, else if, else)
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will this code print?</div><div class="level-code-input">int x = 10;<br>if (x > 15) {<br>&nbsp;&nbsp;System.out.println("Big");<br>} else {<br>&nbsp;&nbsp;System.out.println("Small");<br>}</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Big</li><li class="question-choice">B. Small</li><li class="question-choice">C. 15</li><li class="question-choice">D. Nothing</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of the following is a valid `if` statement?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. if x = 5:</li><li class="question-choice">B. if (x == 5)</li><li class="question-choice">C. if x != 5 then</li><li class="question-choice">D. if x -> 5</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blanks to print “Teenager” if the age is between 13 and 19:</div><div class="level-code-input">if (age >= 13 ______ age <= 19) {<br>&nbsp;&nbsp;System.out.println("Teenager");<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will be printed?</div><div class="level-code-input">int grade = 65;<br>if (grade >= 70) {<br>&nbsp;&nbsp;System.out.println("Pass");<br>} else {<br>&nbsp;&nbsp;System.out.println("Fail");<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 10 is a boss level and has no questions in the document.

            // Level 11: while Loops + Teaching String Input Again
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the condition of a `while` loop?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. A boolean that controls repetition</li><li class="question-choice">B. A number that counts up</li><li class="question-choice">C. A function that returns a name</li><li class="question-choice">D. A print statement</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What happens if the condition in a `while` loop is never false?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Loop runs once</li><li class="question-choice">B. Program skips the loop</li><li class="question-choice">C. It causes a syntax error</li><li class="question-choice">D. The loop runs forever</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank so the loop ends when `x` reaches 5:</div><div class="level-code-input">int x = 0;<br>while (____) {<br>&nbsp;&nbsp;System.out.println(x);<br>&nbsp;&nbsp;x++;  // increment x<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix this infinite loop by changing the line that’s missing:</div><div class="level-code-input">String word = "";<br>while (!word.equals("done")) {<br>&nbsp;&nbsp;System.out.print("Type something: ");<br>&nbsp;&nbsp;word = ________;<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 12: do-while Loops
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the main difference between `while` and `do-while`?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. `do-while` only runs once</li><li class="question-choice">B. `do-while` checks the condition first</li><li class="question-choice">C. `do-while` always runs at least once</li><li class="question-choice">D. `do-while` is only used with Strings</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of these `do-while` loops is written correctly?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. do { ... } while (x == 1)</li><li class="question-choice">B. do { ... } while x == 1;</li><li class="question-choice">C. do { ... } while (x == 1);</li><li class="question-choice">D. do ... while (x == 1);</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to ensure the loop stops when `done` is `true`:</div><div class="level-code-input">boolean done = false;<br>do {<br>&nbsp;&nbsp;System.out.println("Working...");<br>&nbsp;&nbsp;done = true;<br>} while (_____ == false);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output of the following?</div><div class="level-code-input">int x = 5;<br>do {<br>&nbsp;&nbsp;System.out.println("Hello");<br>} while (x < 0);</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 13: for Loops
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which part of the `for` loop is run after each loop cycle?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. Initialization</li><li class="question-choice">B. Condition</li><li class="question-choice">C. Update</li><li class="question-choice">D. All of the above</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does the following code print?</div><div class="level-code-input">for (int i = 0; i < 3; i++) {<br>&nbsp;&nbsp;System.out.print(i + " ");<br>}</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. 1 2 3</li><li class="question-choice">B. 0 1 2</li><li class="question-choice">C. 0 1 2 3</li><li class="question-choice">D. 3 2 1</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to print even numbers from 2 to 10:</div><div class="level-code-input">for (int i = 2; i <= 10; ______) {<br>&nbsp;&nbsp;System.out.println(i);<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What will this code print?</div><div class="level-code-input">for (int i = 5; i >= 1; i--) {<br>&nbsp;&nbsp;System.out.print(i + " ");<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 14: break and continue
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which keyword causes the loop to stop immediately?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. stop</li><li class="question-choice">B. exit</li><li class="question-choice">C. break</li><li class="question-choice">D. continue</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which keyword skips only one iteration, then continues the loop?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. jump</li><li class="question-choice">B. continue</li><li class="question-choice">C. break</li><li class="question-choice">D. skip</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fix the code so it skips printing number 2:</div><div class="level-code-input">for (int i = 1; i <= 3; i++) {<br>&nbsp;&nbsp;if (i == 2) {<br>&nbsp;&nbsp;&nbsp;&nbsp;________;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;System.out.println(i);<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output of this code?</div><div class="level-code-input">for (int i = 0; i < 5; i++) {<br>&nbsp;&nbsp;if (i == 3) {<br>&nbsp;&nbsp;&nbsp;&nbsp;break;<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;System.out.print(i + " ");<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 15 is a boss level and has no questions in the document.

            // Level 16: Introduction to Methods
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which keyword sends a value back to where a method was called?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. return</li><li class="question-choice">B. output</li><li class="question-choice">C. break</li><li class="question-choice">D. static</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does `public static` mean for now?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. The method is private</li><li class="question-choice">B. The method can be called without creating an object</li><li class="question-choice">C. The method returns a number</li><li class="question-choice">D. The method must have loops</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to return the sum of `x` and `y`:</div><div class="level-code-input">public static int sum(int x, int y) {<br>&nbsp;&nbsp;&nbsp;&nbsp;_______ x + y;<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output of this code?</div><div class="level-code-input">public static int triple(int x) {<br>&nbsp;&nbsp;&nbsp;&nbsp;return x * 3;<br>}<br><br>public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(triple(4));<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 17: Methods with Multiple Parameters
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which of these is true about parameters?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. They are always `String` type</li><li class="question-choice">B. They can only be one variable</li><li class="question-choice">C. They pass data to a method</li><li class="question-choice">D. They print output to the user</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What happens if you provide the wrong data type for an argument?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. The method changes it automatically</li><li class="question-choice">B. It causes a syntax error</li><li class="question-choice">C. The method skips it</li><li class="question-choice">D. Nothing happens</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to call the `multiply` method:</div><div class="level-code-input">public static int multiply(int x, int y) {<br>&nbsp;&nbsp;&nbsp;&nbsp;return x * y;<br>}<br><br>public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;int result = _______(3, 4);<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(result);<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output?</div><div class="level-code-input">public static double divide(int a, int b) {<br>&nbsp;&nbsp;&nbsp;&nbsp;return a / (double) b;<br>}<br><br>public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(divide(5, 2));<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 18: void Methods
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">What does a `void` method return?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. An integer</li><li class="question-choice">B. A string</li><li class="question-choice">C. A boolean</li><li class="question-choice">D. Nothing</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Which is a correct `void` method declaration?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. public static void greet()</li><li class="question-choice">B. public static greet void()</li><li class="question-choice">C. public static int greet()</li><li class="question-choice">D. void public greet()</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to define a `void` method:</div><div class="level-code-input">public static _____ printMessage() {<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Done!");<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output?</div><div class="level-code-input">public static void sayHi(String name) {<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Hi, " + name + "!");<br>}<br><br>public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;sayHi("Ray");<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',

            // Level 19: Multiple void Methods
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Why use multiple `void` methods?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. To repeat the same code everywhere</li><li class="question-choice">B. To organize related tasks</li><li class="question-choice">C. To make the program slower</li><li class="question-choice">D. To avoid using parameters</li></ul></div>',
            '<div class="question-header">Multiple Choice</div><div class="question-sub-header">Prompt:</div><div class="question-content">Can a `void` method call another method?</div><div class="question-sub-header">Options:</div><div class="question-content"><ul class="question-list"><li class="question-choice">A. No</li><li class="question-choice">B. Yes</li><li class="question-choice">C. Only if it returns a value</li><li class="question-choice">D. Only if it has no parameters</li></ul></div>',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">Fill in the blank to call `showMenu()` from `main`:</div><div class="level-code-input">public static void showMenu() {<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Menu");<br>}<br><br>public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;_______();<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            '<div class="question-header">Complete the Code</div><div class="question-sub-header">Prompt:</div><div class="question-content">What is the output?</div><div class="level-code-input">public static void hello() {<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Hello");<br>}<br><br>public static void bye() {<br>&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Bye");<br>}<br><br>public static void main(String[] args) {<br>&nbsp;&nbsp;&nbsp;&nbsp;hello();<br>&nbsp;&nbsp;&nbsp;&nbsp;bye();<br>}</div><div class="question-sub-header">Answer:</div><input type="text" class="question-input">',
            
            // Level 20 is a boss level and has no questions in the document.
        ];


        $answers = [
            // Level 1
            'C. System.out.println("Hello");',
            'B. main',
            'System.out.println("Java is fun!");',
            'System.out.println("Hello world");',

            // Level 2
            'A. int x = 5;',
            'C. String name = "Eva";',
            'boolean',
            'double price = 12.5;',

            // Level 3
            'C. Scanner input = new Scanner(System.in);',
            'A. input.nextInt();',
            'nextLine()',
            'double height = input.nextDouble();',

            // Level 4
            'C. /',
            'B. 1',
            '*',
            'double average = (a + b) / 2.0;',

            // Level 5
            'A. 4',
            'B. average = (double) total / subjects;',
            'double average = (double) total / count;',
            '3.5',
            
            // Level 6
            'C. Java gives a compile-time error',
            'C. final double PI = 3.14;',
            'final',
            'final int LIMIT = 10; System.out.println(LIMIT);',

            // Level 7
            'C. 4',
            'D. All of the above',
            '10',
            '++a',

            // Level 8
            'A. !=',
            'B. false',
            '>=',
            'true',

            // Level 9
            'B. Small',
            'B. if (x == 5)',
            '&&',
            'Fail',
            
            // Level 10 has no questions.

            // Level 11
            'A. A boolean that controls repetition',
            'D. The loop runs forever',
            'x < 5',
            'input.nextLine()',

            // Level 12
            'C. `do-while` always runs at least once',
            'C. do { ... } while (x == 1);',
            'done',
            'Hello',

            // Level 13
            'C. Update',
            'B. 0 1 2',
            'i += 2',
            '5 4 3 2 1',

            // Level 14
            'C. break',
            'B. continue',
            'continue',
            '0 1 2',
            
            // Level 15 has no questions.

            // Level 16
            'A. return',
            'B. The method can be called without creating an object',
            'return',
            '12',

            // Level 17
            'C. They pass data to a method',
            'B. It causes a syntax error',
            'multiply',
            '2.5',

            // Level 18
            'D. Nothing',
            'A. public static void greet()',
            'void',
            'Hi, Ray!',

            // Level 19
            'B. To organize related tasks',
            'B. Yes',
            'showMenu',
            "Hello\nBye",
            
            // Level 20 has no questions.
        ];

        $levelId = 21; // Java levels start from ID 21
        for ($i = 0; $i < count($contents); $i++) {
            DB::table('questions')->insert([
                'level_id' => $levelId + floor($i / 4),
                'number' => ($i % 4) + 1,
                'content' => $contents[$i],
                'answer' => $answers[$i],
            ]);
        }
    }
}