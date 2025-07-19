@extends('shared.layout')

@section('content')
    <div class="level-page">
        @include('shared.navbar')

        <div class="d-flex flex-column w-100 align-items-center">

            <div class="level-container d-flex flex-column align-items-center mt-4">
                <h1>{{ $level->title }}</h1>
                {!! $level->content !!}
                {{-- <p class="level-content mt-4"></p> --}}
            </div>
        </div>
    </div>
@endsection
