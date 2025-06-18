@extends('shared.layout')

@section('content')
    <div class="home">
        <div class="d-flex flex-column row-1-container home-row bg-primary pb-4">
            @include('shared.navbar')
            <div class="container-fluid d-flex justify-content-center align-items-center flex-grow-1 gap-5">
                <div class="hero-container d-flex flex-column gap-3">
                    <div class="hero-text">
                        <span>Start Your Coding</span>
                        <span>Journey With Us</span>
                    </div>
                    <div class="hero-sub-text">
                        <span>Learn how to code from the basic</span>
                        <span>with our materials and quizzes</span>
                    </div>
                    <a class="btn btn-primary align-self-end px-4 fw-light" href="#">Sign In</a>
                </div>
                <img class="coding-image-home" src="{{asset('images/CodingImageHome.png')}}" alt="CodingImageHome">
            </div>
        </div>
        <div class="row-2-container home-row pt-3 pb-5 d-flex flex-column gap-5">
            <h1 class="fw-bold text-center">Our Material</h1>
            <div class="material-container d-flex justify-content-center flex-grow-1">
                <div class="material">
                    <img class="material-image-home" src="{{asset('images/C_Programming_Language.png')}}" alt="C_Programming_Language">
                    <span>C</span>
                    <a class="btn btn-primary px-4 fw-light" href="#">Start</a>
                </div>
                <div class="material">
                    <img class="material-image-home" src="{{asset('images/Java.png')}}" alt="Java_programming_language_logo">
                    <span>Java</span>
                    <a class="btn btn-primary px-4 fw-light" href="#">Start</a>
                </div>
                <div class="material">
                    <img class="material-image-home" src="{{asset('images/Python.png')}}" alt="Python">
                    <span>Python</span>
                    <a class="btn btn-primary px-4 fw-light" href="#">Start</a>
                </div>
            </div>
        </div>
        <div class="row-3-container home-row bg-primary">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <img src="{{asset('images/ClimbLeaderboardHome.png')}}" alt="ClimbLeaderboardHome">
                <div class="row-3-content d-flex flex-column">
                    <h1>Unlock Your Potential</h1>
                    <h3 class="fw-light">Gather point by finishing the quizz and climb the leaderboard to be the best coder you can be</h3>
                </div>
            </div>
        </div>
        <div class="row-4-container home-row pt-5 d-flex flex-column align-items-center gap-5">
            <div class="row-4-content text-center d-flex flex-column gap-3">
                <h1>Participate In Our Community!</h1>
                <h3 class="fw-light">Empower others by sharing knowledge, collaborating to solve challenges, and seeking help when needed to foster growth and innovation.</h3>
            </div>
            <img class="community-image-home" src="{{asset('images/communityHome.png')}}" alt="communityHome">
        </div>
    </div>
@endsection
