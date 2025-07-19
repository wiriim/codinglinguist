@extends('shared.layout')

@section('content')
    <div class="course pb-5">
        @include('shared.navbar')

        <div class="d-flex flex-column align-items-center mt-3">
            <div class="course-logo">
                <img src="{{ asset('images/C_Programming_Language.png') }}" alt="C_Programming_Language" width="80"
                    height="95">
            </div>
            <div class="course-basic-syntax my-4 d-flex gap-3 justify-content-center align-items-center">
                <div class="course-line"></div>
                <h2 class="d-flex justify-content-center"><span>Basic Syntax</span></h2>
                <div class="course-line"></div>
            </div>

            <div class="d-flex flex-column text-center gap-5 w-100 align-items-center">
                @foreach ($levelBS as $level)
                    <a class="course-level-link" href="{{route('level', $level->id)}}">
                        <div class="level" data-number="{{ $level->number }}">{{ $level->number }}</div>
                    </a>
                @endforeach
            </div>

            <div class="course-conditionals-loops my-4 d-flex gap-3 justify-content-center align-items-center">
                <div class="course-line"></div>
                <h2 class="d-flex justify-content-center"><span>Conditionals & Loops</span></h2>
                <div class="course-line"></div>
            </div>

            <div class="d-flex flex-column text-center gap-5 w-100 align-items-center">
                @foreach ($levelCL as $level)
                    <a class="course-level-link" href="{{route('level', $level->id)}}">
                        <div class="level" data-number="{{ $level->number }}">{{ $level->number }}</div>
                    </a>
                @endforeach

            </div>

            <div class="course-functions my-4 d-flex gap-3 justify-content-center align-items-center">
                <div class="course-line"></div>
                <h2 class="d-flex justify-content-center"><span>{{ $course->course_name }} Functions</span></h2>
                <div class="course-line"></div>
            </div>

            <div class="d-flex flex-column text-center gap-5 w-100 align-items-center">
                @foreach ($levelFN as $level)
                    <a class="course-level-link" href="{{route('level', $level->id)}}">
                        <div class="level" data-number="{{ $level->number }}">{{ $level->number }}</div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>
@endsection
