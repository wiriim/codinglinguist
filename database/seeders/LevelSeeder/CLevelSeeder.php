<?php

namespace Database\Seeders\LevelSeeder;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // C seeder
        $titles = ['Printing Your First Message in C', 'Declaring and Using Variables in C', 'Taking User Input and Displaying Output in C', 'Using Constants and #define in C', 'Using Arithmetic Operators in C', 'Using Relational Operators in C', 'Logical Operators in C', 'Assignment and Compound Assignment in C', 'Using Increment and Decrement Operators in C', 'Julius Lie Mall – Fixed Discount Day', 'Getting Started with Strings and Conditions', 'Making Multi-Path Decisions with else if', 'Repeating Tasks with while and do while Loops', 'Controlled Repetition with the for Loop', 'Student Score Evaluator (Curriculum Edition)', 'Writing and Calling Functions in C', 'Passing Data to Functions (and Getting It Back)', 'Putting It All Together: Smarter Functions', 'Smarter Functions: Breaking Programs into Logical Parts', 'Course Final Project'];
        $contents = [
            '<div class="level-header">Printing Your First Message in C</div>
                <div class="level-sub-header">Content:</div>
                <div class="level-content">
                    Welcome to your first step in learning the C programming language!<br>
                    In this lesson, you’ll learn how to:<br><br>
                    <ul>
                        <li>Write a simple C program.<br><br></li>
                        <li>Use <code>#include</code> and <code>main()</code> function.<br><br></li>
                        <li>Use <code>printf()</code> to display output on the screen.<br><br></li>
                        <li>Understand the role of semicolons (<code>;</code>) in C.</li>
                    </ul>
                </div>

                <div class="level-sub-header">💡 Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt;<br><br>

                    int main() {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Hello, World!");<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                    }
                </div>

                <div class="level-sub-header">Explanation:</div>
                <div class="level-content">
                    <ul>
                        <li><code>#include &lt;stdio.h&gt;</code>: Tells the compiler to include the Standard Input/Output library so you can use functions like <code>printf</code>.<br><br></li>
                        <li><code>main()</code>: The starting point of every C program.<br><br></li>
                        <li><code>printf(...)</code>: Prints the message to the screen.<br><br></li>
                        <li><code>return 0;</code>: Indicates the program ended successfully.</li>
                    </ul>
                </div>',
            '<div class="level-header">Declaring and Using Variables in C</div>
            <div class="level-sub-header">Content:</div>
            <div class="level-content">
                In this level, you’ll learn how to declare variables and understand basic data types in C.<br><br>

                📌 <strong>Key Concepts:</strong><br>
                A variable is a named space in memory used to store values.<br><br>

                In C, every variable must be declared with a data type.<br><br>

                Common data types:<br><br>

                <ul>
                    <li><code>int</code>: Integer numbers (e.g., 10, -3)</li>
                    <li><code>float</code>: Decimal numbers (e.g., 3.14)</li>
                    <li><code>char</code>: A single character (e.g., \'A\')</li>
                </ul><br>

                Syntax for declaring variables:<br><br>

                <code>int age = 25;</code><br>
                <code>float pi = 3.14;</code><br>
                <code>char grade = \'A\';</code>
            </div>

            <div class="level-sub-header">💡 Example Code:</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int age = 20;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;float height = 5.9;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;char grade = \'B\';<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Age: %d\\n", age);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Height: %.1f\\n", height);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Grade: %c\\n", grade);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="level-content">
                <strong>Note:</strong><br>
                <ul>
                    <li><code>%d</code> is used to print <code>int</code><br></li>
                    <li><code>%.1f</code> is used to print <code>float</code> with 1 decimal place<br></li>
                    <li><code>%c</code> is used to print <code>char</code></li>
                </ul>
            </div>',
            '<div class="level-header">Taking User Input and Displaying Output in C</div>

                <div class="level-sub-header">Content:</div>
                <div class="level-content">
                    In this level, you\'ll learn how to:
                    <ul>
                        <li>Use <code>scanf()</code> to take input from the user</li>
                        <li>Use <code>printf()</code> to display output</li>
                    </ul>
                </div>

                <div class="level-sub-header">Key Functions:</div>
                <div class="level-content">
                    <ul>
                        <li><code>printf()</code>: Displays output to the screen</li>
                        <li><code>scanf()</code>: Accepts user input</li>
                    </ul>
                </div>

                <div class="level-sub-header">Syntax:</div>
                <div class="level-code-input">
                    scanf("format", &amp;variable);
                </div>
                <div class="level-content">
                    The ampersand (<code>&amp;</code>) is used to pass the memory address of the variable where the input
                    should be stored.
                </div>

                <div class="level-sub-header">Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt; <br><br>

                    int main() { <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;int age; <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter your age: "); <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;age); <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("You are %d years old.\n", age); <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;return 0; <br>
                    }
                </div>

                <div class="level-sub-header">Input:</div>
                <div class="level-code-input">
                    Enter your age: 17
                </div>

                <div class="level-sub-header">Output:</div>
                <div class="level-code-input">
                    You are 17 years old.
                </div>',
            '<div class="level-header">Using Constants and #define in C</div>

                <div class="level-sub-header">Content:</div>
                <div class="level-content">
                    In C programming, we often use constants for fixed values that shouldn’t be changed during program
                    execution.<br><br>
                    There are two ways to define constants:
                </div>

                <div class="level-sub-header">🧱 1. Using <code>#define</code> (Preprocessor Directive)</div>
                <div class="level-code-input">
                    #define PI 3.14
                </div>
                <div class="level-content">
                    <ul>
                        <li><code>PI</code> is a symbolic name.</li>
                        <li><code>3.14</code> will replace every occurrence of <code>PI</code> at compile time.</li>
                        <li>No semicolon (<code>;</code>) is used after <code>#define</code>.</li>
                    </ul>
                </div>

                <div class="level-sub-header">🧱 2. Using the <code>const</code> keyword</div>
                <div class="level-code-input">
                    const int MAX_SCORE = 100;
                </div>
                <div class="level-content">
                    <ul>
                        <li><code>const</code> variables can’t be changed after initialization.</li>
                        <li>These behave like variables, but with read-only access.</li>
                    </ul>
                </div>

                <div class="level-sub-header">💡 Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt;<br><br>

                    #define PI 3.14<br><br>

                    int main() {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;const int maxAge = 100;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;float radius = 2.0;<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;printf("PI is %.2f\\n", PI);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Max Age is %d\\n", maxAge);<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                    }
                </div>',
            '<div class="level-header">Using Arithmetic Operators in C</div>

                <div class="level-sub-header">Content:</div>
                <div class="level-content">
                    Arithmetic operators allow you to perform mathematical operations like addition, subtraction,
                    multiplication, division, and modulus.
                </div>

                <div class="level-sub-header">🔢 Basic Arithmetic Operators:</div>
                <div class="level-content">
                    <table class="level-table">
                        <thead>
                            <tr>
                                <th>Operator</th>
                                <th>Description</th>
                                <th>Example (a = 10, b = 3)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>+</code></td>
                                <td>Addition</td>
                                <td><code>a + b = 13</code></td>
                            </tr>
                            <tr>
                                <td><code>-</code></td>
                                <td>Subtraction</td>
                                <td><code>a - b = 7</code></td>
                            </tr>
                            <tr>
                                <td><code>*</code></td>
                                <td>Multiplication</td>
                                <td><code>a * b = 30</code></td>
                            </tr>
                            <tr>
                                <td><code>/</code></td>
                                <td>Division</td>
                                <td><code>a / b = 3</code></td>
                            </tr>
                            <tr>
                                <td><code>%</code></td>
                                <td>Modulus (remainder)</td>
                                <td><code>a % b = 1</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="level-sub-header">💡 Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt;<br><br>

                    int main() {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;int a = 10, b = 3;<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Addition: %d\\n", a + b);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Subtraction: %d\\n", a - b);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Multiplication: %d\\n", a * b);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Division: %d\\n", a / b);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Modulus: %d\\n", a % b);<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                    }
                </div>

                <div class="level-sub-header">Output:</div>
                <div class="level-code-input">
                    Addition: 13<br>
                    Subtraction: 7<br>
                    Multiplication: 30<br>
                    Division: 3<br>
                    Modulus: 1
                </div>',
            '<div class="level-header">Using Relational Operators in C</div>

                <div class="level-sub-header">Content:</div>
                <div class="level-content">
                    Relational operators are used to compare two values. The result is either true (1) or false (0).
                </div>

                <div class="level-sub-header">📊 List of Relational Operators:</div>
                <div class="level-content">
                    <table class="level-table">
                        <thead>
                            <tr>
                                <th>Operator</th>
                                <th>Description</th>
                                <th>Example (a = 5, b = 8)</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>==</code></td>
                                <td>Equal to</td>
                                <td><code>a == b</code></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><code>!=</code></td>
                                <td>Not equal to</td>
                                <td><code>a != b</code></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><code>&gt;</code></td>
                                <td>Greater than</td>
                                <td><code>a &gt; b</code></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><code>&lt;</code></td>
                                <td>Less than</td>
                                <td><code>a &lt; b</code></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><code>&gt;=</code></td>
                                <td>Greater than or equal</td>
                                <td><code>a &gt;= b</code></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><code>&lt;=</code></td>
                                <td>Less than or equal</td>
                                <td><code>a &lt;= b</code></td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="level-sub-header">💡 Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt;<br><br>

                    int main() {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;int a, b;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;a = 5;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;b = 8;<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;printf("a == b: %d\\n", a == b);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("a != b: %d\\n", a != b);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("a > b: %d\\n", a > b);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("a < b: %d\\n", a < b);<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;printf("a >= b: %d\\n", a >= b);<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;printf("a <= b: %d\\n", a <=b);<br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                            }
                </div>

                <div class="level-sub-header">🧪 Input:</div>
                <div class="level-content">
                    No input (values are hardcoded: a = 5, b = 8)
                </div>

                <div class="level-sub-header">📤 Output:</div>
                <div class="level-code-input">
                    a == b: 0<br>
                    a != b: 1<br>
                    a &gt; b: 0<br>
                    a &lt; b: 1<br>
                    a &gt;= b: 0<br>
                    a &lt;= b: 1
                </div>',
            '<div class="level-header">Logical Operators in C</div>

            <div class="level-sub-header">Content:</div>
            <div class="level-content">
                Logical operators are used to combine or invert relational expressions. They return either true (1) or false (0), just like relational operators.
            </div>

            <div class="level-sub-header">🧮 Logical Operators:</div>
            <div class="level-content">
                <table class="level-table">
                    <thead>
                        <tr>
                            <th>Operator</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Example (a = 5, b = 8, c = 5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>&&</code></td>
                            <td>AND</td>
                            <td>True if both conditions are true</td>
                            <td><code>(a == c && b &gt; a) → 1</code></td>
                        </tr>
                        <tr>
                            <td><code>||</code></td>
                            <td>OR</td>
                            <td>True if at least one condition is true</td>
                            <td><code>(a == b || b &lt; a) → 0</code></td>
                        </tr>
                        <tr>
                            <td><code>!</code></td>
                            <td>NOT</td>
                            <td>Reverses the result</td>
                            <td><code>!(a == c) → 0</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="level-sub-header">💡 Example Code:</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int a = 5, b = 8, c = 5;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("a == c && b > a: %d\\n", a == c && b > a);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("a == b || b < a: %d\\n", a == b || b < a);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("!(a == c): %d\\n", !(a == c));<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="level-sub-header">🧪 Input:</div>
            <div class="level-content">
                None (values are predefined in the code)
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-code-input">
                a == c && b > a: 1<br>
                a == b || b < a: 0<br>
                !(a == c): 0
            </div>',
            '<div class="level-header">Assignment and Compound Assignment in C</div>

                <div class="level-sub-header">Content:</div>
                <div class="level-content">
                    Assignment operators are used to store a value in a variable.<br>
                    Compound assignment operators help shorten expressions like <code>x = x + 1</code>.
                </div>

                <div class="level-sub-header">🧮 Basic Assignment:</div>
                <div class="level-code-input">
                    int x = 5; &nbsp;&nbsp;// Assigns 5 to variable x
                </div>

                <div class="level-sub-header">🔁 Compound Assignment Operators:</div>
                <div class="level-content">
                    <table class="level-table">
                        <thead>
                            <tr>
                                <th>Operator</th>
                                <th>Meaning</th>
                                <th>Example</th>
                                <th>Equivalent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>+=</code></td>
                                <td>Add and assign</td>
                                <td><code>x += 3;</code></td>
                                <td><code>x = x + 3;</code></td>
                            </tr>
                            <tr>
                                <td><code>-=</code></td>
                                <td>Subtract and assign</td>
                                <td><code>x -= 2;</code></td>
                                <td><code>x = x - 2;</code></td>
                            </tr>
                            <tr>
                                <td><code>*=</code></td>
                                <td>Multiply and assign</td>
                                <td><code>x *= 4;</code></td>
                                <td><code>x = x * 4;</code></td>
                            </tr>
                            <tr>
                                <td><code>/=</code></td>
                                <td>Divide and assign</td>
                                <td><code>x /= 2;</code></td>
                                <td><code>x = x / 2;</code></td>
                            </tr>
                            <tr>
                                <td><code>%=</code></td>
                                <td>Modulus and assign</td>
                                <td><code>x %= 3;</code></td>
                                <td><code>x = x % 3;</code></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="level-sub-header">💡 Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt;<br><br>

                    int main() {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;int x = 10;<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;x += 5;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("After += : %d\\n", x);<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;x *= 2;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("After *= : %d\\n", x);<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;x -= 4;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("After -= : %d\\n", x);<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                    }
                </div>

                <div class="level-sub-header">🧪 Input:</div>
                <div class="level-content">
                    None (values are assigned within the code)
                </div>

                <div class="level-sub-header">📤 Output:</div>
                <div class="level-code-input">
                    After += : 15<br>
                    After *= : 30<br>
                    After -= : 26
                </div>',
            '<div class="level-header">Using Increment and Decrement Operators in C</div>

                <div class="level-sub-header">Content:</div>
                <div class="level-content">
                    These operators are used to increase or decrease a variable\'s value by 1.<br>
                    There are two types: <strong>prefix</strong> and <strong>postfix</strong>.
                </div>

                <div class="level-sub-header">🔢 Operators:</div>
                <div class="level-content">
                    <table class="level-table">
                        <thead>
                            <tr>
                                <th>Operator</th>
                                <th>Name</th>
                                <th>Example</th>
                                <th>Meaning</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>++x</code></td>
                                <td>Prefix increment</td>
                                <td><code>++x;</code></td>
                                <td>Increase first, then use</td>
                            </tr>
                            <tr>
                                <td><code>x++</code></td>
                                <td>Postfix increment</td>
                                <td><code>x++;</code></td>
                                <td>Use first, then increase</td>
                            </tr>
                            <tr>
                                <td><code>--x</code></td>
                                <td>Prefix decrement</td>
                                <td><code>--x;</code></td>
                                <td>Decrease first, then use</td>
                            </tr>
                            <tr>
                                <td><code>x--</code></td>
                                <td>Postfix decrement</td>
                                <td><code>x--;</code></td>
                                <td>Use first, then decrease</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="level-sub-header">💡 Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt;<br><br>

                    int main() {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;int x = 5;<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Post-increment: %d\\n", x++);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("After post-increment: %d\\n", x);<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;printf("Pre-increment: %d\\n", ++x);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;printf("After pre-increment: %d\\n", x);<br><br>

                    &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                    }
                </div>

                <div class="level-sub-header">🧪 Input:</div>
                <div class="level-content">
                    None (the variable <code>x</code> is assigned in the code)
                </div>

                <div class="level-sub-header">📤 Output:</div>
                <div class="level-code-input">
                    Post-increment: 5<br>
                    After post-increment: 6<br>
                    Pre-increment: 7<br>
                    After pre-increment: 7
                </div>',
            '<div class="level-header">Julius Lie Mall – Fixed Discount Day</div>

                <div class="level-content">
                    Julius Lie Mall is holding a promo event where every customer must buy exactly 3 items.<br>
                    As a new C programmer, your job is to write a program that:
                    <ul>
                        <li>Receives the price of each item.</li>
                        <li>Calculates the total price.</li>
                        <li>Applies a 25% discount.</li>
                        <li>Prints each item’s price and the final amount to pay after the discount.</li>
                    </ul>
                </div>

                <div class="level-sub-header">✅ Test Case Examples</div>

                <div class="level-sub-header">Example Input 1:</div>
                <div class="level-code-input">
                    10000<br>
                    15000<br>
                    20000
                </div>

                <div class="level-sub-header">Expected Output 1:</div>
                <div class="level-code-input">
                    Item 1: 10000<br>
                    Item 2: 15000<br>
                    Item 3: 20000<br>
                    Total after 25%% discount: 33750
                </div>

                <div class="level-sub-header">Example Input 2:</div>
                <div class="level-code-input">
                    20000<br>
                    30000<br>
                    10000
                </div>

                <div class="level-sub-header">Expected Output 2:</div>
                <div class="level-code-input">
                    Item 1: 20000<br>
                    Item 2: 30000<br>
                    Item 3: 10000<br>
                    Total after 25%% discount: 45000
                </div>',
            '<div class="level-header">Getting Started with Strings and Conditions</div>

                <div class="level-sub-header">Part 1: Strings in C (char[])</div>
                <div class="level-content">
                    In C, strings are stored as arrays of characters.<br>
                    <code>char name[30];</code><br>
                    <code>scanf("%s", name);</code><br><br>
                
                    ⚠️ <code>scanf("%s", ...)</code> reads input until the first space.<br>
                    If you enter "John Doe" → it only reads "John".<br><br>
                
                    To print a string:<br>
                    <code>printf("Hello, %s!", name);</code>
                </div>
                
                <div class="level-sub-header">Part 2: Using if and else Conditions</div>
                <div class="level-code-input">
                if (condition) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;// code if true<br>
                } else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;// code if false<br>
                }
                </div>
                <div class="level-sub-header">You can also add an <code>else if</code>:</div>
                <div class="level-code-input">
                if (x &gt; 10) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Big number!");<br>
                } else if (x == 10) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Exactly ten!");<br>
                } else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Small number!");<br>
                }
                </div>
                
                <div class="level-sub-header">💡 Example Code:</div>
                <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>
                
                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;char name[20];<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int age;<br><br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter your name: ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%s", name);<br><br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter your age: ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;age);<br><br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;if (age &gt;= 18) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Welcome, %s! You are an adult.\\n", name);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Sorry, %s. You are underage.\\n", name);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>
                
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
                </div>
                
                <div class="level-sub-header">🧪 Input:</div>
                <div class="level-code-input">
                    Alice<br>
                    20
                </div>
                
                <div class="level-sub-header">📤 Output:</div>
                <div class="level-code-input">Enter your name: Enter your age: Welcome, Alice! You are an adult.</div>',
            '<div class="level-header">Making Multi-Path Decisions with else if</div>

            <div class="level-content">
                In C, if and else if let your program pick from multiple paths:
            </div>
            <div class="level-code-input">
                int score = 75; br
                if (score &gt;= 90) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Grade: A");<br>
                } else if (score &gt;= 80) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Grade: B");<br>
                } else if (score &gt;= 70) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Grade: C");<br>
                } else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Grade: F");<br>
                }
            </div>

            <div class="level-content">You can also nest conditions inside other conditions:</div>

            <div class="level-code-input">
                if (score &gt;= 70) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if (score &gt;= 90) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Excellent!");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Good job!");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }
            </div>
            <div class="level-sub-header">💡 Example Code</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;char name[30];<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int age;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter your name: ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%s", name);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter your age: ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;age);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;if (age &gt;= 18) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (age &gt;= 65) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Hello %s, you are a senior.\\n",
                name);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Hello %s, you are an adult.\\n",
                name);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;} else if (age &gt;= 13) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Hi %s, you are a teenager.\\n", name);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Hey %s, you are a child.\\n", name);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="level-sub-header">🧪 Input:</div>
            <div class="level-content">
                Bella<br>
                70
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-content">
                Enter your name: Enter your age: Hello Bella, you are an adult.
            </div>
            ',
            '<div class="level-header">Controlled Repetition with the for Loop</div>

            <div class="level-content">
                The for loop is great for repeating a task a specific number of times. It has three parts:<br>
                <code>for (initialization; condition; update) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;// loop body<br>
                }</code>
            </div>

            <div class="level-content">Example:</div>
            <div class="level-code-input">
                int i;<br>
                for (i = 1; i &lt;= 5; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("%d\n", i);<br>
                }
            </div>

            <div class="level-content">📝 Output:</div>
            <div class="level-code-input">
                1<br>
                2<br>
                3<br>
                4<br>
                5
            </div>

            <div class="level-content">
                💡 Using for with if<br>
                You can combine for with conditionals to do smart checks:
            </div>

            <div class="level-code-input">
                int i;<br>
                for (i = 1; i &lt;= 10; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if (i % 2 == 0) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("%d is even\n", i);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                }
            </div>

            <div class="level-sub-header">💡 Example Code</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int i, score, total = 0;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; i &lt;= 3; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Enter score %d: ", i);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;score);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (score &gt;= 60) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Pass!\n");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Fail!\n");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total += score;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Total score: %d\n", total);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="level-sub-header">🧪 Input:</div>
            <div class="level-code-input">
                70<br>
                55<br>
                90
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-code-input">
                Enter score 1: Pass!<br>
                Enter score 2: Fail!<br>
                Enter score 3: Pass!<br>
                Total score: 215
            </div>
            ',
            '<div class="level-header">Repeating Tasks with while and do while Loops</div>

            <div class="level-content">
                🔁 <strong>while Loop</strong><br>
                A while loop repeats as long as the condition is true:<br><br>

                <code>
                int i = 0;<br>
                while (i &lt; 5) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("%d ", i);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;i++;<br>
                }
                </code><br><br>

                📝 <strong>Output:</strong><br>
                0 1 2 3 4
            </div>

            <div class="level-content">
                🔁 <strong>do while Loop</strong><br>
                A do while loop runs at least once, even if the condition is false:<br><br>

                <code>
                int i = 5;<br>
                do {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("%d ", i);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;i++;<br>
                } while (i &lt; 5);
                </code><br><br>

                📝 <strong>Output:</strong><br>
                5
            </div>

            <div class="level-sub-header">💡 Example Code</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int password;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter password (hint: 1234): ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;password);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;while (password != 1234) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Wrong password. Try again: ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;password);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Access granted!\\n");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }
            </div>

            <div class="level-sub-header">🧪 Input:</div>
            <div class="level-code-input">
                1111<br>
                9999<br>
                1234
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-code-input">
                Enter password (hint: 1234): Wrong password. Try again: Wrong password. Try again: Access granted!
            </div>
            '
            ,
            '<div class="level-header">Student Score Evaluator (Curriculum Edition)</div>

            <div class="level-content">
                You’re developing a program for a school with custom curriculums. Each student can have a different number of assessments depending on their major.<br>
                Your program must:
            </div>

            <div class="level-content">
                1. Ask for the student\'s name (<code>char[]</code>).<br><br>

                2. Ask how many scores the student has (<code>int</code>).<br><br>

                3. Use a <code>for</code> loop to take in each score (integer).<br><br>

                4. After all scores are input:<br><br>

                <ul>
                    <li>Calculate the average score.<br><br></li>
                    <li>If the average is &ge; 60, print:<br><code>"Student [name]: Pass (Average: X)"</code><br><br></li>
                    <li>If the average is &lt; 60, print:<br><code>"Student [name]: Fail (Average: X)"</code><br><br></li>
                </ul>

                5. However, if any score is below 40, override everything and print:<br>
                <code>"Student [name] must retake the exam."</code><br><br>

                Do not use arrays. Stick to only variables, loops, conditionals, and what you’ve learned in Levels 1–14.
            </div>

            <div class="level-sub-header">🧪 Example Test Cases</div>

            <div class="level-content">✅ Example Input 1:</div>
            <div class="level-code-input">
                Aria<br>
                3<br>
                70<br>
                80<br>
                60
            </div>

            <div class="level-content">✅ Expected Output 1:</div>
            <div class="level-code-input">
                Enter student name: Enter number of scores: <br>
                Enter score 1: Enter score 2: Enter score 3: <br>
                Student Aria: Pass (Average: 70)
            </div>

            <div class="level-content">✅ Example Input 2:</div>
            <div class="level-code-input">
                Ben<br>
                3<br>
                50<br>
                35<br>
                90
            </div>

            <div class="level-content">✅ Expected Output 2:</div>
            <div class="level-code-input">
                Enter student name: Enter number of scores: <br>
                Enter score 1: Enter score 2: Enter score 3: <br>
                Student Ben must retake the exam.
            </div>
            ',
            '<div class="level-header">Writing and Calling Functions in C</div>

            <div class="level-content">
                Functions allow us to break code into smaller parts.<br>
                <code>// Function declaration<br>
                void greet();</code><br><br>

                <code>// Main function<br>
                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;greet();<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }</code><br><br>

                <code>// Function definition<br>
                void greet() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Hello from a function!\n");<br>
                }</code>
            </div>

            <div class="level-content">
                🧠 Function declaration tells the compiler the function exists.<br>
                💡 Function definition contains the logic.<br>
                🚀 Function call executes the function.
            </div>

            <div class="level-sub-header">💡 Example Code:</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                void printWelcome();<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Program started!\n");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printWelcome();<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Program finished!\n");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }<br><br>

                void printWelcome() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Welcome to C Functions!\n");<br>
                }
            </div>

            <div class="level-sub-header">🧪 Input:</div>
            <div class="level-code-input">
                (no input)
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-code-input">
                Program started!<br>
                Welcome to C Functions!<br>
                Program finished!
            </div>
            ',
            '<div class="level-header">Passing Data to Functions (and Getting It Back)</div>

            <div class="level-content">
                In Level 16, you learned how to create and call a simple function. But real-world functions often need input (parameters) and return output (return values).<br><br>

                🔧 <strong>Function with Parameters:</strong><br>
                <code>void greet(char name[]) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Hello, %s!\\n", name);<br>
                }</code><br><br>

                🔁 <strong>Function with Return Value:</strong><br>
                <code>int add(int a, int b) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return a + b;<br>
                }</code><br><br>

                Use it like this:<br>
                <code>int result = add(3, 5);<br>
                printf("%d", result);  // Output: 8</code><br><br>

                🧠 <strong>Notes:</strong><br>
                Return type (int, void, etc.) goes before the function name.<br><br>
                You must return a value that matches the return type.<br><br>
                You must pass arguments in the same order and type as declared.
            </div>

            <div class="level-sub-header">💡 Example Code:</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int square(int num);<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int input, result;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter a number: ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;input);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;result = square(input);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Square of %d is %d\\n", input, result);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }<br><br>

                int square(int num) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return num * num;<br>
                }
            </div>

            <div class="level-sub-header">🧪 Input:</div>
            <div class="level-code-input">
                4
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-code-input">
                Enter a number: Square of 4 is 16
            </div>
            ',
            '<div class="level-header">Putting It All Together: Smarter Functions</div>

            <div class="level-content">
                C functions can contain loops, conditionals, and receive multiple parameters — just like main() does!<br><br>

                🔄 <strong>Example: Average of N Numbers</strong><br>
                <code>float calculateAverage(int total, int count) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return (float) total / count;<br>
                }</code><br><br>

                Notice the cast to float to avoid integer division.<br><br>

                🔁 <strong>Example: Count how many scores are ≥ 60</strong><br>
                <code>int countPassed(int totalScores) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int score, passed = 0;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;for (int i = 1; i &lt;= totalScores; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Enter score %d: ", i);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;score);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (score &gt;= 60) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;passed++;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return passed;<br>
                }</code>
            </div>

            <div class="level-sub-header">💡 Full Example Code:</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int countPassed(int n);<br>
                float calculateAverage(int total, int count);<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int n, score, sum = 0, passed;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("How many scores? ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;n);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;for (int i = 1; i &lt;= n; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Enter score %d: ", i);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;score);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += score;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;passed = countPassed(n);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;float avg = calculateAverage(sum, n);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Average: %.2f\\n", avg);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;printf("Passed: %d\\n", passed);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }<br><br>

                int countPassed(int n) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int score, passed = 0;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;for (int i = 1; i &lt;= n; i++) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Enter score %d again: ", i);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;score);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (score &gt;= 60) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;passed++;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                &nbsp;&nbsp;&nbsp;&nbsp;}<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return passed;<br>
                }<br><br>

                float calculateAverage(int total, int count) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return (float) total / count;<br>
                }
            </div>

            <div class="level-sub-header">🧪 Input:</div>
            <div class="level-code-input">
                3<br>
                70<br>
                80<br>
                60<br>
                70<br>
                80<br>
                60
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-code-input">
                How many scores? Enter score 1: Enter score 2: Enter score 3: <br>
                Enter score 1 again: Enter score 2 again: Enter score 3 again: <br>
                Average: 70.00<br>
                Passed: 3
            </div>

            <div class="level-content">
                🔎 This uses two functions, each with parameters, and applies loops and conditionals inside
            </div>
            ',
            '<div class="level-header">Smarter Functions: Breaking Programs into Logical Parts</div>

            <div class="level-content">
                As programs grow, we must break them into smaller, reusable functions:<br>
                One function to input and validate data<br><br>

                One function to calculate something<br><br>

                One function to display results
            </div>

            <div class="level-content">✨ Example: Voting Eligibility Checker</div>
            <div class="level-content">🔧 Roles:
                <ul>
                    <li><code>int getAge()</code> → Gets valid age input</li>
                    <li><code>int isEligible(int age)</code> → Returns 1 if eligible</li>
                    <li><code>void showResult(char name[], int eligible)</code> → Displays the message</li>
                </ul>
            </div>

            <div class="level-sub-header">💡 Full Example Code:</div>
            <div class="level-code-input">
                #include &lt;stdio.h&gt;<br><br>

                int getAge();<br>
                int isEligible(int age);<br>
                void showResult(char name[], int eligible);<br><br>

                int main() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;char name[30];<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int age, eligible;<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;printf("Enter your name: ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;scanf("%s", name);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;age = getAge();<br>
                &nbsp;&nbsp;&nbsp;&nbsp;eligible = isEligible(age);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;showResult(name, eligible);<br><br>

                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br>
                }<br><br>

                int getAge() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;int age;<br>
                &nbsp;&nbsp;&nbsp;&nbsp;do {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("Enter your age (&gt;=0): ");<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf("%d", &amp;age);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;} while (age &lt; 0);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return age;<br>
                }<br><br>

                int isEligible(int age) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;return age &gt;= 17;<br>
                }<br><br>

                void showResult(char name[], int eligible) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;if (eligible)<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("%s is eligible to vote!\\n", name);<br>
                &nbsp;&nbsp;&nbsp;&nbsp;else<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf("%s is NOT eligible to vote.\\n", name);<br>
                }
            </div>

            <div class="level-sub-header">🧪 Sample Input:</div>
            <div class="level-code-input">
                Dina<br>
                -5<br>
                16
            </div>

            <div class="level-sub-header">📤 Output:</div>
            <div class="level-code-input">
                Enter your name: Enter your age (&gt;=0): Enter your age (&gt;=0): <br>
                Dina is NOT eligible to vote.
            </div>
            ',
            '<div class="level-header">📘 Case-Based Prompt:</div>

                <div class="level-content">
                    You’ve been hired to build a mini grading system for a coding bootcamp.<br>
                    Each student will receive multiple test scores, and your program must:
                </div>

                <div class="level-content">✅ Requirements:
                    <ul class="decimal-list">
                        <li>Input the student’s name</li>
                        <li>Input how many tests they have taken</li>
                        <li>Input the test scores, one by one</li>
                        <li>Calculate the average score</li>
                        <li>Determine the grade:</li>
                        <ul>
                            <li>A if avg ≥ 85</li>
                            <li>B if avg ≥ 70</li>
                            <li>C if avg ≥ 60</li>
                            <li>D otherwise</li>
                        </ul>
                        <li>Check if any score &lt; 40</li>
                        <li>If yes, print <code>Student [name] must retake the course.</code></li>
                        <li>If no, print a formatted report card:<br><br>
                            <pre>
                    === Report Card ===
                    Name   : [student name]
                    Average: [average]
                    Grade  : [A/B/C/D]
                            </pre>
                        </li>
                    </ul>
                </div>


                <div class="level-content">🧠 Restrictions:
                    <ul class="decimal-list">
                        <li>✅ Must use at least 3 functions:
                            <ul>
                                <li>One for taking the scores</li>
                                <li>One for calculating average</li>
                                <li>One for printing the report</li>
                            </ul>
                        </li>
                        <li>❌ Do not use arrays</li>
                        <li>❌ Do not use libraries other than stdio.h</li>
                    </ul>
                </div>


                <div class="level-sub-header">🧪 Example Test Cases</div>

                <div class="level-content">✅ Example Input 1:</div>
                <div class="level-code-input">
                    Rafi<br>
                    3<br>
                    80<br>
                    90<br>
                    85
                </div>

                <div class="level-content">✅ Expected Output 1:</div>
                <div class="level-code-input">
                    Enter student name: Enter number of tests: <br>
                    Enter score 1: Enter score 2: Enter score 3: <br><br>

                    === Report Card ===<br>
                    Name   : Rafi<br>
                    Average: 85.00<br>
                    Grade  : A
                </div>

                <div class="level-content">✅ Example Input 2:</div>
                <div class="level-code-input">
                    Maya<br>
                    4<br>
                    70<br>
                    30<br>
                    80<br>
                    75
                </div>

                <div class="level-content">✅ Expected Output 2:</div>
                <div class="level-code-input">
                    Enter student name: Enter number of tests: <br>
                    Enter score 1: Enter score 2: Enter score 3: Enter score 4: <br>
                    Student Maya must retake the course.
                </div>',
        ];
        $answers = [
            'Item 1: 10000\nItem 2: 15000\nItem 3: 20000\nTotal after 25% discount: 33750',
            'Enter student name: Enter number of scores: \nEnter score 1: Enter score 2: Enter score 3: \nStudent Aria: Pass (Average: 70)',
            'Enter student name: Enter number of tests: \nEnter score 1: \nEnter score 2: \nEnter score 3: \n\n=== Report Card ===\nName   : Rafi\nAverage: 85.00\nGrade  : A'
        ];
        $inputs = [
            '10000\n15000\n20000\n', 
            'Aria\n3\n70\n80\n60\n',
            'Rafi\n3\n80\n90\n85\n'
        ];

        $number = 1;
        $bossIndex = 0;
        foreach ($titles as $title) {
            if($number == 10 || $number == 15 || $number ==20){
                DB::table('levels')->insert([
                    'course_id' => 1,
                    'number' => $number,
                    'title' => $title,
                    'content' => $contents[$number-1],
                    'answer' => $answers[$bossIndex],
                    'input' => $inputs[$bossIndex],
                    'point' => 100
                ]);
                $bossIndex++;
            }
            else{
                DB::table('levels')->insert([
                    'course_id' => 1,
                    'number' => $number,
                    'title' => $title,
                    'content' => $contents[$number-1],
                    'point' => 25
                ]);
            }
            $number++;
        }
    }
}
