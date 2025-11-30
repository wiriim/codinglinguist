@extends('shared.layout')

@section('content')
    <div class="about-us-page d-flex flex-column">
        @include('shared.navbar')

        <img src="{{asset('images/rocket.svg')}}" alt="rocket" class="about-us-rocket">

        <div class="what-info-container flex-column justify-content-around">
            <h4>What’s CodingLinguist?</h4>
            <p class="mt-3 fs-5">CodingLinguist is a web-based programming language learning platform designed to make coding education more interactive and engaging. </p>
            <p class="mt-4 fs-5">By incorporating gamification, we create a motivating learning experience where users can earn points and rewards for completing coding challenges. </p>
        </div>
        <div class="why-info-container flex-column justify-content-center">
            <h4>Why CodingLinguist?</h4>
            <p class="mt-3 fs-5">We provide community forum features that enables users to discuss, share solutions, and learn collaboratively in a supportive environment.</p>
        </div>
        <div class="about-us-container flex-grow-1 d-flex flex-column align-items-center">
            <h1 class="header">CodingLinguist</h1>
            <h2 class="sub-header">Code, Discuss, Learn!</h2>
            <h1 class="hooker">Coding shouldn’t be boring!</h1>
            <h3 class="sub-hooker">Join us and become part of an active and inspiring coding learning community! 🚀</h3>
        </div>
    </div>
@endsection
