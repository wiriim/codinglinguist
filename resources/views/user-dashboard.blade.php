@extends('shared.layout')

@section('content')
    <div class="user-dashboard d-flex flex-column">
        @include('shared.navbar')

        <div class="d-flex flex-grow-1 justify-content-center align-items-center">
            <div class="dashboard-container p-5 d-flex flex-column gap-5">
                <h1 class="text-center fw-bold">Select Your Coding Journey</h1>

                <div class="coding-journey-container flex-grow-1 d-flex flex-wrap justify-content-center">
                    <div class="coding-journey">
                        <img class="material-image-user-dashboard" src="{{asset('images/C_Programming_Language.png')}}" alt="C_Programming_Language">
                        <p class="title">C</p>
                        <p class="description">C builds a strong foundation in low-level programming and memory management.</p>
                        <a href="{{route('course', 1)}}" class="btn btn-primary">Start</a>
                    </div>
                    <div class="coding-journey">
                        <img class="material-image-user-dashboard" src="{{asset('images/Java.png')}}" alt="Java_programming_language_logo">
                        <p class="title">Java</p>
                        <p class="description">Java is crucial for building cross-platform applications and enterprise solutions.</p>
                        <a href="{{route('course', 3)}}" class="btn btn-primary">Start</a>
                    </div>
                    <div class="coding-journey">
                        <img class="material-image-user-dashboard" src="{{asset('images/Python.png')}}" alt="Python">
                        <p class="title">Python</p>
                        <p class="description">Python excels in simplicity, automation, and data science applications.</p>
                        <a href="{{route('course', 2)}}" class="btn btn-primary">Start</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection