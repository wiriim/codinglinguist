@extends('shared.layout')

@section('content')
    <div class="sign-in d-flex flex-column">
        @include('shared.navbar')

        <div class="flex-grow-1 d-flex justify-content-center align-items-center h-100">
            <div class="sign-in-container d-flex flex-wrap">

                <div class="left-side py-4 flex-grow-1 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/SignIn.png') }}" alt="SignIn">
                </div>
                <div class="right-side py-4 flex-grow-1 d-flex justify-content-center align-items-center">
                    <form action="{{ route('sign-in') }}" method="post"
                        class="sign-in-form d-flex flex-column align-items-center">
                        @csrf
                        <h1 class="fw-bold">Sign In</h1>
                        <div class="d-flex flex-column gap-2">
                            <div class="mb-3">
                                <label for="username" class="form-label fw-medium">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                                @error('username')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-medium">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @error('password')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            @error('credential')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                            @if (session('success'))
                                 <div class="alert alert-success mt-2">{{ session('success') }}</div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary px-5">Sign In</button>
                        <p class="fw-bold">Don’t Have An Account? <a href="{{ route('sign-up') }}">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
