@extends('shared.layout')

@section('content')
    <div class="question-page">
        @include('shared.navbar')
        <div class="d-flex flex-column w-100 align-items-center">
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
            <div class="level-container d-flex flex-column align-items-center">
                @include('question-content')
            </div>
        </div>
    </div>
@endsection
