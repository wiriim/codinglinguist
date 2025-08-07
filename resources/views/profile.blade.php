@extends('shared.layout')

@section('content')
    <div class="profile">
        @include('shared.navbar')
        
        <input type="text" hidden id="profilePage" value="profile">
        <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center h-100 pb-5">
            <div class="profile-container my-4 d-flex justify-content-center    ">
                <div class="profile-header d-flex align-items-center gap-4">
                    <div class="profile-image">
                        <img src="{{asset('images/cat.jpg')}}" alt="cat" width="180" height="180">
                    </div>
                    <div class="profile-info d-flex flex-column justify-content-between">
                        <h3 class="profile-name fw-bold">{{Auth::user()->username}} | {{Auth::user()->point}} Points</h3>
                        <h5 class="profile-name">{{Auth::user()->email}}</h5>
                        <img src="{{asset('images/medalGold.png')}}" alt="goldmedal" width="40">
                    </div>
                </div>
                <div class="profile-button d-flex align-items-end h-75 gap-3">
                    <a href="{{route(name: 'edit-profile' )}}" class="btn btn-primary btn-edit-profile">Edit</a>
                    <a href="{{route('logout')}}" class="btn btn-danger btn-logout-profile">Logout</a>
                </div>
            </div>

            <div class="profile-nav">
                <div class="nav-line"></div>
                <div class="nav-link-container d-flex align-items-start h-100">
                    <button href="" class="profile-nav-link active posts-link" id="posts-btn">Posts</button>
                    <button href="" class="profile-nav-link" id="progress-btn">Progress</button>
                </div>
            </div>

            <div class="profile-posts-container ">
                @include('profile-posts')
            </div>

            <div class="progress-container d-none">
                @include('profile-progress')
            </div>
        </div>
    </div>
@endsection