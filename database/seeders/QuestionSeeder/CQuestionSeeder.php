<?php

namespace Database\Seeders\QuestionSeeder;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $contents = [
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">Which line is responsible for printing output in this program?</div>

            <div class="question-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Hello, World!");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. #include <stdio.h></li>
                    <li class="question-choice">B. int main()</li>
                    <li class="question-choice">C. printf("Hello, World!");</li>
                    <li class="question-choice">D. return 0;</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Complete the code to print <code>Welcome to C!</code>.
            </div>

            <div class="question-code-input">
                #include &lt;stdio.h&gt;<br><br>
                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;_____("Welcome to C!");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">Which of the following signifies the end of a single, complete statement?</div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. :</li>
                    <li class="question-choice">B. ;</li>
                    <li class="question-choice">C. ()</li>
                    <li class="question-choice">D. #</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to include the Standard Input Output header file.
            </div>

            <div class="question-code-input">
                #include _____<br><br>
                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Learning C!");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which of the following is a valid variable declaration in C?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. int 2number = 5;</li>
                    <li class="question-choice">B. float pi = 3.14;</li>
                    <li class="question-choice">C. char name = Hello;</li>
                    <li class="question-choice">D. double = value 10.5;</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Declare a character variable named <code>grade</code> and assign it the value <code>\'A\'</code>.
            </div>

            <div class="question-code-input">
                _____ grade = \'A\';
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which data type is best suited for storing the number 100?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. char</li>
                    <li class="question-choice">B. float</li>
                    <li class="question-choice">C. int</li>
                    <li class="question-choice">D. string</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to declare a float variable <code>height</code> with a value of <code>6.1</code>.
            </div>

            <div class="question-code-input">
                float height = _____;
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the correct way to take input for a float variable named <code>temperature</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. scanf("%d", &amp;temperature);</li>
                    <li class="question-choice">B. scanf("%f", temperature);</li>
                    <li class="question-choice">C. scanf("%f", &amp;temperature);</li>
                    <li class="question-choice">D. scanf("%char", &amp;temperature);</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blanks to ask the user for their age and print it.
            </div>

            <div class="question-code-input">
                int age;<br>
                printf("Enter age: ");<br>
                _____("%d", _____);<br>
                printf("Age: %d", age);
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input" placeholder="x, y">'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which of the following statements is true about the <code>scanf()</code> function?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. It is used only to print output</li>
                    <li class="question-choice">B. It stores input into variables using pointers</li>
                    <li class="question-choice">C. It does not require format specifiers</li>
                    <li class="question-choice">D. It works without the &amp; symbol for integers</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                You want to input a character into variable <code>gender</code>. Fill in the blank.
            </div>

            <div class="question-code-input">
                char gender;<br>
                scanf("%c", _____);
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which of the following correctly defines a constant using <code>#define</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. define PI = 3.14;</li>
                    <li class="question-choice">B. #define PI 3.14</li>
                    <li class="question-choice">C. #define = 3.14 PI</li>
                    <li class="question-choice">D. const #define PI 3.14</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is true about constants declared using <code>const</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. They can be changed during runtime.</li>
                    <li class="question-choice">B. They must be re-declared before use.</li>
                    <li class="question-choice">C. They cannot be modified once assigned.</li>
                    <li class="question-choice">D. They do not use data types.</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blanks to define a constant integer named <code>LIMIT</code> with a value of <code>50</code>.
            </div>

            <div class="question-code-input">
                _____ int LIMIT = _____;
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input" placeholder="x, y">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to define <code>MAX</code> as <code>100</code> using a macro.
            </div>

            <div class="question-code-input">
                #define _____ 100
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What will be the output of this expression: <code>12 % 5</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. 2</li>
                    <li class="question-choice">B. 3</li>
                    <li class="question-choice">C. 4</li>
                    <li class="question-choice">D. 0</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which operator is used for multiplication in C?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. x</li>
                    <li class="question-choice">B. *</li>
                    <li class="question-choice">C. ^</li>
                    <li class="question-choice">D. mult()</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to divide <code>a</code> by <code>b</code> and store the result in <code>result</code>.
            </div>

            <div class="question-code-input">
                int a = 20, b = 4;<br>
                int result = a _____ b;
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the result of <code>15 % 4</code>?<br>
                <small>(Write the result only.)</small>
            </div>

            <div class="question-code-input">
                int result = 15 % 4; // result = _____
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What will be the result of this expression: <code>10 &lt;= 5</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. 1</li>
                    <li class="question-choice">B. 5</li>
                    <li class="question-choice">C. 0</li>
                    <li class="question-choice">D. true</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which of the following operators checks for equality?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. !=</li>
                    <li class="question-choice">B. ==</li>
                    <li class="question-choice">C. >=</li>
                    <li class="question-choice">D. =</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to check if <code>x</code> is not equal to <code>y</code>.
            </div>

            <div class="question-code-input">
                if (x _____ y) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("x is not equal to y");<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the output of the following code?
            </div>

            <div class="question-code-input">
                int x = 7, y = 7;<br>
                printf("%d", x == y);
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which of the following operators means “logical AND”?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. ||</li>
                    <li class="question-choice">B. &&</li>
                    <li class="question-choice">C. !</li>
                    <li class="question-choice">D. &amp;</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the result of this expression: <code>(5 &lt; 10 || 10 &lt; 5)</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. 1</li>
                    <li class="question-choice">B. 0</li>
                    <li class="question-choice">C. 10</li>
                    <li class="question-choice">D. 5</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blanks to check if both <code>a</code> is greater than <code>b</code> and <code>a</code> is not equal to <code>b</code>.
            </div>

            <div class="question-code-input">
                if (a _____ b _____ a _____ b) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Condition is true");<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input" placeholder="x, y, z">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the result of the following code?
            </div>

            <div class="question-code-input">
                int x = 3, y = 7;<br>
                printf("%d", !(x &lt; y));
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the output of this expression?
            </div>

            <div class="question-code-input">
            int a = 4;<br>
            a *= 3;<br>
            printf("%d", a);
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. 12</li>
                    <li class="question-choice">B. 7</li>
                    <li class="question-choice">C. 4</li>
                    <li class="question-choice">D. 3</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which of the following statements is equivalent to <code>x = x % 5;</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. x = x / 5;</li>
                    <li class="question-choice">B. x %= 5;</li>
                    <li class="question-choice">C. x += 5;</li>
                    <li class="question-choice">D. x == 5;</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to subtract <code>2</code> from variable <code>points</code> using compound assignment.
            </div>

            <div class="question-code-input">
                points _____ 2;
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the value of <code>x</code> after this code?
            </div>

            <div class="question-code-input">
                int x = 20;<br>
                x /= 4;
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the output of the following code?
            </div>

            <div class="question-code-input">
            int a = 3;<br>
            printf("%d", ++a);
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. 2</li>
                    <li class="question-choice">B. 3</li>
                    <li class="question-choice">C. 4</li>
                    <li class="question-choice">D. 5</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which operator decreases the value of a variable by 1?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. ++</li>
                    <li class="question-choice">B. --</li>
                    <li class="question-choice">C. **</li>
                    <li class="question-choice">D. //</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to increment <code>score</code> after printing it.
            </div>

            <div class="question-code-input">
                int score = 7;<br>
                printf("%d", _____);
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What will be printed by this code?
            </div>

            <div class="question-code-input">
                int x = 10;<br>
                printf("%d", x--);
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which line correctly declares a string (<code>word</code>) that can store up to 29 letters?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. string name;</li>
                    <li class="question-choice">B. char name[30];</li>
                    <li class="question-choice">C. char name;</li>
                    <li class="question-choice">D. int name[30];</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the output of this code?
            </div>

            <div class="question-code-input">
            int a = 7;<br>
            if (a &gt;= 10) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;printf("Big!");<br>
            } else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;printf("Small!");<br>
            }
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. Big!</li>
                    <li class="question-choice">B. Small!</li>
                    <li class="question-choice">C. Nothing</li>
                    <li class="question-choice">D. Error</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blank to take a string input and print it.
            </div>

            <div class="question-code-input">
                char country[20];<br>
                scanf("%s", _____);<br>
                printf("Country: %s", country);
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix the condition to check if <code>age</code> is below <code>13</code>:
            </div>

            <div class="question-code-input">
                int age = 10;<br>
                if (_____ 13) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("You are a child.");<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the output of the following code?
            </div>

            <div class="question-code-input">
            int score = 85;<br><br>

            if (score &gt;= 90) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;printf("A");<br>
            } else if (score &gt;= 80) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;printf("B");<br>
            } else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;printf("C");<br>
            }
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. A</li>
                    <li class="question-choice">B. B</li>
                    <li class="question-choice">C. C</li>
                    <li class="question-choice">D. Nothing</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is a nested <code>if</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. An if inside a for</li>
                    <li class="question-choice">B. An if inside another if</li>
                    <li class="question-choice">C. An else without if</li>
                    <li class="question-choice">D. A string inside an if</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blanks to print <code>"Teen"</code> if the age is between <code>13</code> and <code>19</code> (inclusive):
            </div>

            <div class="question-code-input">
                if (age >= 13 _____ age <= 19) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Teen");<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix the nested <code>if</code> logic to show “VIP” only for adults aged 30+.
            </div>

            <div class="question-code-input">
                if (age >= 18) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;_____ (age >= 30) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("VIP");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which loop always runs at least once?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. while</li>
                    <li class="question-choice">B. do while</li>
                    <li class="question-choice">C. for</li>
                    <li class="question-choice">D. repeat</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the output of this code?
            </div>

            <div class="question-code-input">
            int x = 1;<br>
            while (x &lt;= 3) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;printf("%d ", x);<br>
            &nbsp;&nbsp;&nbsp;&nbsp;x++;<br>
            }
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. 1 2 3</li>
                    <li class="question-choice">B. 0 1 2</li>
                    <li class="question-choice">C. 1 2 3 4</li>
                    <li class="question-choice">D. Infinite loop</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blanks to make a <code>do while</code> loop that prints <code>"Try again"</code> until <code>x == 5</code>:
            </div>

            <div class="question-code-input">
                int x;<br>
                do {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Try again\n");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &x);<br>
                } _____ (x _____ 5);
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input" placeholder="x, y">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix the loop to print the word <code>"Looping!"</code> 3 times.
            </div>

            <div class="question-code-input">
                int i = 0;<br>
                while (i &lt; 3) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Looping!\n");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;_____;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the correct syntax of a <code>for</code> loop?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. for i = 0 to 10</li>
                    <li class="question-choice">B. for (i &lt; 10; i++; int i)</li>
                    <li class="question-choice">C. for (int i = 0; i &lt; 10; i++)</li>
                    <li class="question-choice">D. loop (i = 0; i &lt; 10; i++)</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                How many times will this loop run?
            </div>

            <div class="question-code-input">
            for (int i = 5; i &lt;= 7; i++) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;printf("Hi\n");<br>
            }
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. 2</li>
                    <li class="question-choice">B. 3</li>
                    <li class="question-choice">C. 4</li>
                    <li class="question-choice">D. 5</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix the loop to print even numbers from <code>2</code> to <code>10</code>:
            </div>

            <div class="question-code-input">
                for (int i = 2; i &lt;= 10; _____) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("%d ", i);<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Complete the code to count how many scores are below <code>60</code>:
            </div>

            <div class="question-code-input">
                int count = 0, score;<br>
                for (int i = 0; i &lt; 3; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &score);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if (_____ &lt; 60) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count++;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What does a function do in C?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. Adds more RAM</li>
                    <li class="question-choice">B. Splits a program into parts</li>
                    <li class="question-choice">C. Deletes variables</li>
                    <li class="question-choice">D. Changes the main function</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What line calls a function named <code>hello()</code>?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. call hello();</li>
                    <li class="question-choice">B. run hello();</li>
                    <li class="question-choice">C. hello();</li>
                    <li class="question-choice">D. invoke hello()</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blanks to declare and define a function:
            </div>

            <div class="question-code-input">
                _____ sayHi();<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;sayHi();<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }<br><br>

                void sayHi() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Hi!");<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix this program to call <code>printGoodbye()</code>:
            </div>

            <div class="question-code-input">
                void printGoodbye();<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;_____ <br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }<br><br>

                void printGoodbye() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Bye!\n");<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the return type of this function?
            </div>

            <div class="question-code-input">
            int getAge() {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;return 20;<br>
            }
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. void</li>
                    <li class="question-choice">B. age</li>
                    <li class="question-choice">C. int</li>
                    <li class="question-choice">D. return</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Which function call is correct for this function?<br>
                <code>int add(int x, int y);</code>
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. add();</li>
                    <li class="question-choice">B. add(2);</li>
                    <li class="question-choice">C. add(2, 3);</li>
                    <li class="question-choice">D. add(x, y, z);</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the blanks to return the square of a number:
            </div>

            <div class="question-code-input">
                int square(int n) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;_____ n * n;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix the function to receive two numbers and return their sum:
            </div>

            <div class="question-code-input">
                int add(_____, _____) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return a + b;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input" placeholder="x, y">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What is the correct return type if a function returns a decimal number?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. int</li>
                    <li class="question-choice">B. void</li>
                    <li class="question-choice">C. float</li>
                    <li class="question-choice">D. char</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What happens if you forget to return a value in a non-void function?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. Nothing happens</li>
                    <li class="question-choice">B. The program ignores it</li>
                    <li class="question-choice">C. Compiler error</li>
                    <li class="question-choice">D. It returns zero by default</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix this function to return the average as a float:
            </div>

            <div class="question-code-input">
                float avg(int total, int count) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return _____;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fix the loop inside the function to count even numbers:
            </div>

            <div class="question-code-input">
                int countEven(int n) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int num, even = 0;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;for (int i = 1; i &lt;= n; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &num);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (_____ % 2 == 0) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;even++;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return even;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,

            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What’s a good reason to split logic into multiple functions?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. So the code looks longer</li>
                    <li class="question-choice">B. So the compiler runs faster</li>
                    <li class="question-choice">C. To improve reusability and clarity</li>
                    <li class="question-choice">D. Because main() can only have 10 lines</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Multiple Choice
            </div>

            <div class="question-sub-header">Code Snippet:</div>
            <div class="question-code-input">
                int getAge() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int age;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;do {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;age);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;} while (age &lt; 0);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return age;<br>
                }
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                What does the <code>getAge()</code> function above ensure?
            </div>

            <div class="question-sub-header">Options:</div>
            <div class="question-content">
                <ul class="question-list">
                    <li class="question-choice">A. Age is above 60</li>
                    <li class="question-choice">B. Age is less than 17</li>
                    <li class="question-choice">C. Age input is non-negative</li>
                    <li class="question-choice">D. Age input is a float</li>
                </ul>
            </div>'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Complete this function that checks if a number is odd:
            </div>

            <div class="question-code-input">
                int isOdd(int num) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return _____;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
            ,
            '<div class="question-header">
                Complete the Code
            </div>

            <div class="question-sub-header">Prompt:</div>
            <div class="question-content">
                Fill in the function that displays result based on a score:
            </div>

            <div class="question-code-input">
                void showGrade(int score) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if (score &gt;= 90)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Grade: A");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;else if (score &gt;= 75)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Grade: B");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;else<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____;<br>
                }
            </div>

            <div class="question-sub-header">Answer:</div>
            <input type="text" class="question-input">'
        ];

        $answers = ['C. printf("Hello, World!");', 'printf', 'B. ;', '<stdio.h>',
        'B. float pi = 3.14;', 'char', 'C. int', '6.1',
        'C. scanf("%f", &temperature);', 'scanf, &age', 'B. It stores input into variables using pointers', '&gender',
        'B. #define PI 3.14', 'C. They cannot be modified once assigned.', 'const, 50', 'MAX',
        'A. 2', 'B. *', '/', '3',
        'C. 0', 'B. ==', '!=', '1',
        'B. &&', 'A. 1', '>, &&, !=', '0',
        'A. 12', 'B. x %= 5;', '-=', '5',
        'C. 4', 'B. --', 'score++', '10',
        'B. char name[30];', 'B. Small!', 'country', 'age <',
        'B. B', 'B. An if inside another if', '&&', 'if',
        'B. do while', 'A. 1 2 3', 'while, !=', 'i++',
        'C. for (int i = 0; i < 10; i++)', 'B. 3', 'i += 2', 'score',
        'B. Splits a program into parts', 'C. hello();', 'void', 'printGoodbye();',
        'C. int', 'C. add(2, 3);', 'return', 'int a, int b',
        'C. float', 'C. Compiler error', '(float) total / count', 'num',
        'C. To improve reusability and clarity', 'C. Age input is non-negative', 'num % 2 != 0', 'printf("Grade: C");'];

        $number = 1;
        $levelId = 1;
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
                if ($levelId == 10 || $levelId == 15 || $levelId == 20) $levelId++;
            }
        }
    }
}
