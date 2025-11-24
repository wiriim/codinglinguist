@extends('shared.layout')

@section('content')
    <div class="course pb-5">
        @include('shared.navbar')

        <div class="d-flex flex-column align-items-center mt-3">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            <div class="course-logo">
                @if ($course->course_name == 'C')
                    <img src="{{ asset('images/C_Programming_Language.png') }}" alt="C_Programming_Language" width="80"
                        height="95">
                @elseif($course->course_name == 'Java')
                    <img src="{{ asset('images/Java.png') }}" alt="Java_Programming_Language" width="80" height="95">
                @elseif($course->course_name == 'Python')
                    <img src="{{ asset('images/Python.png') }}" alt="Python_Programming_Language" width="80"
                        height="95">
                @endif
            </div>
            <div class="course-basic-syntax my-4 d-flex gap-3 justify-content-center align-items-center">
                <div class="course-line"></div>
                <h2 class="d-flex justify-content-center"><span>Basic Syntax</span></h2>
                <div class="course-line"></div>
            </div>

            <div class="d-flex flex-column text-center gap-5 w-100 align-items-center">
                @foreach ($levelBS as $level)
                    @if ((Auth::check() && Auth::user()->allowLevel($level->id)) || $level->id == 1 || $level->id == 21 || $level->id == 41)
                        <a class="course-level-link"
                            href="{{ route('level', ['course' => $level->course->id, 'level' => $level->id]) }}">
                            @if (Auth::check())
                                @foreach ($level->users as $user)
                                    @if ($user->pivot->status == 1 && Auth::user()->username == $user->username)
                                        <div class="level" data-number="{{ $level->number }}"><img
                                                src="{{ asset('images/check.png') }}" alt="check" width="20"></div>
                                    @elseif ($user->pivot->status == 0 && Auth::user()->username == $user->username)
                                        <div class="level" data-number="{{ $level->number }}">{{ $level->number }}</div>
                                    @endif
                                @endforeach
                            @else
                                <div class="level" data-number="{{ $level->number }}">{{ $level->number }}</div>
                            @endif

                        </a>
                    @else
                        <span class="course-level-link">
                            <div class="level lock" data-number="{{ $level->number }}"><img
                                    src="{{ asset('images/lock.png') }}" alt="lock" width="25"></div>
                        </span>
                    @endif
                @endforeach
            </div>

            <div class="course-conditionals-loops my-4 d-flex gap-3 justify-content-center align-items-center">
                <div class="course-line"></div>
                <h2 class="d-flex justify-content-center"><span>Conditionals & Loops</span></h2>
                <div class="course-line"></div>
            </div>

            <div class="d-flex flex-column text-center gap-5 w-100 align-items-center">
                @foreach ($levelCL as $level)
                    @if (Auth::check() && Auth::user()->allowLevel($level->id))
                        <a class="course-level-link"
                            href="{{ route('level', ['course' => $level->course->id, 'level' => $level->id]) }}">
                            @foreach ($level->users as $user)
                                @if ($user->pivot->status == 1 && Auth::user()->username == $user->username)
                                    <div class="level" data-number="{{ $level->number }}"><img
                                            src="{{ asset('images/check.png') }}" alt="check" width="20"></div>
                                @elseif (Auth::check() == false || $user->id == Auth::id())
                                    <div class="level" data-number="{{ $level->number }}">{{ $level->number }}</div>
                                @endif
                            @endforeach
                        </a>
                    @else
                        <span class="course-level-link">
                            <div class="level lock" data-number="{{ $level->number }}"><img
                                    src="{{ asset('images/lock.png') }}" alt="lock" width="25"></div>
                        </span>
                    @endif
                @endforeach

            </div>

            <div class="course-functions my-4 d-flex gap-3 justify-content-center align-items-center">
                <div class="course-line"></div>
                <h2 class="d-flex justify-content-center"><span>{{ $course->course_name }} Functions</span></h2>
                <div class="course-line"></div>
            </div>

            <div class="d-flex flex-column text-center gap-5 w-100 align-items-center">
                @foreach ($levelFN as $level)
                    @if (Auth::check() && Auth::user()->allowLevel($level->id))
                        <a class="course-level-link"
                            href="{{ route('level', ['course' => $level->course->id, 'level' => $level->id]) }}">
                            @foreach ($level->users as $user)
                                @if ($user->pivot->status == 1 && Auth::user()->username == $user->username)
                                    <div class="level" data-number="{{ $level->number }}"><img
                                            src="{{ asset('images/check.png') }}" alt="check" width="20"></div>
                                @elseif (Auth::check() == false || $user->id == Auth::id())
                                    <div class="level" data-number="{{ $level->number }}">{{ $level->number }}</div>
                                @endif
                            @endforeach
                        </a>
                    @else
                        <span class="course-level-link">
                            <div class="level lock" data-number="{{ $level->number }}"><img
                                    src="{{ asset('images/lock.png') }}" alt="lock" width="25"></div>
                        </span>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
