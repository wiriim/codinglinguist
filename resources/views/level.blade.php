@extends('shared.layout')

@section('content')
    <div class="level-page">
        @include('shared.navbar')

        <div class="d-flex flex-column w-100 align-items-center">
            <div class="level-question-nav my-4">
                <div class="nav-item">
                    i
                </div>
                <div class="nav-item">
                    1
                </div>
                <div class="nav-item">
                    2
                </div>
                <div class="nav-item">
                    3
                </div>
                <div class="nav-item">
                    4
                </div>
            </div>
            <div class="level-container d-flex flex-column align-items-center">
                <div class="level-header">Declaring and Using Variables in C</div>
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
                        <li>char: A single character (e.g., 'A')</li>
                        <li>Syntax for declaring variables:</li>
                    </ul>
                </div>
                <div class="level-code-input">
                    int age = 25; <br>
                    float pi = 3.14; <br>
                    char grade = 'A'; <br>
                </div>
                <div class="level-sub-header">Example Code:</div>
                <div class="level-code-input">
                    #include &lt;stdio.h&gt; <br> <br>

                    int main() { <br>
                    &nbsp;&nbsp;&nbsp; int age = 20; <br>
                    &nbsp;&nbsp;&nbsp;float height = 5.9; <br>
                    &nbsp;&nbsp;&nbsp;char grade = 'B'; <br> <br>

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
                </ul></div>
                {{-- <h1>{{ $level->title }}</h1> --}}
                {{-- {!! $level->content !!} --}}
                {{-- <p class="level-content mt-4"></p> --}}
            </div>
        </div>
    </div>
@endsection
