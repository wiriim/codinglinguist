@extends('shared.layout')

@section('content')
    <div class="level-page">
        @include('shared.navbar')

        <div class="d-flex flex-column w-100 align-items-center">
            <div class="level-question-nav my-4">
                <div class="nav-item">
                    i
                </div>
                <div class="nav-item">
                    1
                </div>
                <div class="nav-item">
                    2
                </div>
                <div class="nav-item">
                    3
                </div>
                <div class="nav-item">
                    4
                </div>
            </div>
            <div class="level-container d-flex flex-column align-items-center">
                @include('level-content')
            </div>
        </div>
    </div>
@endsection
