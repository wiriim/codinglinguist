@extends('shared.layout')

@section('content')
    <div class="level-page">
        @include('shared.navbar')

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
            </div>
        </div>
    </div>
@endsection
