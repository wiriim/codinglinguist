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
                <form class="sign-in-form d-flex flex-column align-items-center">
                    <h1 class="fw-bold">Sign In</h1>
                    <div class="d-flex flex-column gap-2">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-medium">Username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-medium">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary px-5">Sign In</button>
                    <p class="fw-bold">Don’t Have An Account?  <a href="#">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection