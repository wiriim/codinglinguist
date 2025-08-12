@extends('shared.layout')

@section('content')
    <div class="create-post">
        @include('shared.navbar')

        <div class="d-flex justify-content-center">
            <div class="create-post-container mt-4">
                <h1 class="fw-bold">Edit Profile</h1>

                <form action="{{route('edit-profile')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required
                            value="{{ Auth::user()->username }}">
                        @error('username')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="profilePicture" class="form-label">Profile Picture</label>
                        <input type="file" id="profilePicture" name="profilePicture">
                        @error('profilePicture')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required
                            value="{{ Auth::user()->email }}">
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="oldPassword" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
                        @error('oldPassword')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                        @error('newPassword')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    

                    <div class="d-flex gap-3 justify-content-end">
                        <a href="{{route('profile', Auth::id())}}" class="btn btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-post">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
