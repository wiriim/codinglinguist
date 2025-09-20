@extends('shared.layout')

@section('content')
    <div class="level-page">
        @include('shared.navbar')

        <input type="text" hidden id="levelPage" value="level">
        <input type="text" hidden id="levelId" value="{{$level->id}}">
        <input type="text" hidden id="courseId" value="{{$level->course->id}}">
        <input type="text" hidden id="levelLanguage" value="{{$level->course->course_name}}">
        <div class="d-flex flex-column w-100 align-items-center">
            <div class="level-question-nav my-4">
                <a
                    href="{{ route('level', ['course' => $level->course->id, 'level' => $level->id]) }}">
                    <div class="nav-item bg-primary text-white">
                        i
                    </div>
                </a>
                @foreach ($level->questions as $qst)
                    <a
                        href="{{ route('question', ['course' => $level->course->id, 'level' => $level->id, 'question' => $qst->id]) }}">
                        @if (Auth::check() && Auth::user()->questionFinished($qst->id))
                            <div class="nav-item bg-success text-white">
                                {{ $qst->number }}
                            </div>
                        @else
                            <div class="nav-item">
                                {{ $qst->number }}
                            </div>
                        @endif
                    </a>
                @endforeach
            </div>
            <div class="level-container d-flex flex-column align-items-center">
                @include('level-content')

                @if ($level->number == 10 || $level->number == 15 || $level->number == 20)
                    @include('level-compiler')
                @else
                    @foreach ($level->questions as $qst)
                        <a href="{{ route('question', ['course' => $level->course->id, 'level' => $level->id, 'question' => $qst->id]) }}" class="btn-success start-level" id="btn-start-level-continue">Continue</a>    
                        @break
                    @endforeach 
                @endif
                <div class="alert alert-success mt-2 w-100 d-none" id="successAlert">Success</div>
                <div class="alert alert-danger mt-2 w-100 d-none" id="dangerAlert">Incorrect, please check your code and try again</div>
                @if (Auth::check() && Auth::user()->levelFinished($level->id, $level->course->id))
                    <div class="alert alert-success mt-2 w-100" id="successAlert">Success</div>
                    <a href="{{route('course', $level->course->id)}}" class="btn-success question-submit" id="btn-level-boss-continue">Continue</a>
                @else
                <a class="btn-success question-submit d-none" id="btn-level-boss-continue">Continue</a>
                @endif
                
            </div>
        </div>
    </div>
@endsection
