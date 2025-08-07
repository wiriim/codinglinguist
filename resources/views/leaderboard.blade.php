@extends('shared.layout')

@section('content')
    <div class="leaderboard-page d-flex flex-column">
        @include('shared.navbar')

        <input type="text" hidden id="leaderboardPage" value="leaderboard">
        <div class="leaderboard-container flex-grow-1 mt-4 align-self-center">
            <div class="leaderboard-header d-flex mb-5 justify-content-between">
                <span>No</span>
                <span>Name</span>
                <span>Points</span>
            </div>
            
            @foreach ($users as $user)
                <div class="leaderboard-user d-flex justify-content-between">
                    <span class="leaderboard-no"></span>
                    <span>{{$user->username}}</span>
                    <span>{{$user->point}} Points</span>
                </div>
            @endforeach
            <div class="d-flex justify-content-end">{{ $users->links() }}</div>
        </div>
    </div>
@endsection