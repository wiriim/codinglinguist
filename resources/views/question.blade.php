@extends('shared.layout')

@section('content')
    <div class="question-page d-flex flex-column">
        @include('shared.navbar')

        <input type="text" hidden id="courseId" value="{{$level->course->id}}">
        <input type="text" hidden id="levelId" value="{{$level->id}}">
        <input type="text" hidden id="questionId" value="{{$question->id}}">
        @if (Auth::check())
            <input type="text" hidden id="questionFinished" value="{{Auth::user()->questionFinished($question->id)}}">
        @endif
        @if (Auth::check() && Auth::user()->questionFinished($question->id))
            <input type="text" hidden id="questionAnswer" value="{{$question->answer}}">
        @endif
        <div class="d-flex flex-column w-100 flex-grow-1 align-items-center">
            <div class="level-question-nav my-4">
                <a
                    href="{{ route('level', ['course' => $level->course->id, 'level' => $level->id]) }}">
                    <div class="nav-item bg-success text-white">
                        i
                    </div>
                </a>
                @foreach ($level->questions as $qst)
                    <a
                        href="{{ route('question', ['course' => $level->course->id, 'level' => $level->id, 'question' => $qst->id]) }}">
                        @if (Auth::check() && Auth::user()->questionFinished($qst->id))
                            <div class="nav-item {{$question->id == $qst->id ? "bg-primary text-white" : "bg-success text-white"}}">
                                {{ $qst->number }}
                            </div>
                        @else
                            <div class="nav-item {{$question->id == $qst->id ? "bg-primary text-white" : ""}}">
                                {{ $qst->number }}
                            </div>
                        @endif
                    </a>
                @endforeach
            </div>
            <div class="question-container d-flex flex-column align-items-center">
                @include('question-content')
                <div class="alert alert-success mt-2 w-100 d-none" id="successAlert">Success</div>
                <div class="alert alert-danger mt-2 w-100 d-none" id="dangerAlert">Incorrect, please check your code and try again</div>
                
                @if (Auth::check() && Auth::user()->questionFinished($question->id))
                    <a class="btn-success question-submit" id="btnQuestionContinue">Continue</a>
                @else
                    <button class="btn-post question-submit" id="btnQuestionSubmit">Submit</button>
                @endif
                
                <a class="btn-success question-submit d-none" id="btnQuestionContinue">Continue</a>
            </div>
        </div>
    </div>
@endsection
