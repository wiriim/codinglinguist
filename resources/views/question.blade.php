@extends('shared.layout')

@section('content')
    <div class="question-page d-flex flex-column">
        @include('shared.navbar')

        <input type="text" hidden id="courseId" value="{{$level->course->id}}">
        <input type="text" hidden id="levelId" value="{{$level->id}}">
        <input type="text" hidden id="questionId" value="{{$question->id}}">
        <div class="d-flex flex-column w-100 flex-grow-1 align-items-center">
            <div class="level-question-nav my-4">
                <a
                    href="{{ route('level', ['course' => $level->course->id, 'level' => $level->id]) }}">
                    <div class="nav-item">
                        i
                    </div>
                </a>
                @foreach ($level->questions as $qst)
                    <a
                        href="{{ route('question', ['course' => $level->course->id, 'level' => $level->id, 'question' => $qst->id]) }}">
                        <div class="nav-item {{$question->id == $qst->id ? "bg-primary text-white" : ""}}">
                            {{ $qst->number }}
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="question-container d-flex flex-column align-items-center">
                @include('question-content')
                <div class="alert alert-success mt-2 w-100 d-none" id="successAlert">Success</div>
                <div class="alert alert-danger mt-2 w-100 d-none" id="dangerAlert">Incorrect, please check your code and try again</div>
                
                <button class="btn-post question-submit" id="btnQuestionSubmit">Submit</button>
                <a class="btn-success question-submit d-none" id="btnQuestionContinue">Continue</a>
            </div>
        </div>
    </div>
@endsection
