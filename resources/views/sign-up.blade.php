@extends('shared.layout')

@section('content')
    <div class="sign-up d-flex flex-column">
        @include('shared.navbar')

        <div class="flex-grow-1 d-flex justify-content-center align-items-center h-100">
            <div class="sign-up-container d-flex flex-wrap">
                <div class="left-side py-4 flex-grow-1 d-flex justify-content-center align-items-center">
                    <form class="sign-up-form d-flex flex-column align-items-center">
                        <h1 class="fw-bold">Sign Up</h1>
                        <div class="d-flex flex-column gap-2">
                            <div class="mb-3">
                                <label for="username" class="form-label fw-medium">Username</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-medium">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-medium">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="confpassword" class="form-label fw-medium">Confirm Password</label>
                                <input type="password" class="form-control" id="confpassword">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary px-5">Sign Up</button>
                        <p class="fw-bold">Already Have An Account? <a href="{{route('sign-in')}}">Sign In</a></p>
                    </form>
                </div>
                <div class="right-side py-4 flex-grow-1 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/SignUp.png') }}" alt="SignUp">
                </div>
            </div>
        </div>

    </div>
@endsection
