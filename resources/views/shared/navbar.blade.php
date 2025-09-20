<div class="navbar-container d-flex justify-content-center fw-bold">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="{{route('home')}}">CodingLinguist</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @if (!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('home') ? "active" : ""}} " aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('user-dashboard') ? "active" : ""}}" aria-current="page" href="{{route('user-dashboard')}}">Dashboard</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Course
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('course', 1)}}">C</a></li>
                            <li><a class="dropdown-item" href="{{route('course', 2)}}">Python</a></li>
                            <li><a class="dropdown-item" href="{{route('course', 3)}}">Java</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('posts') ? "active" : ""}}" href="{{route('posts')}}">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('about-us') ? "active" : ""}}" href="{{route('about-us')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{Route::is('leaderboard') ? "active" : ""}}" href="{{route('leaderboard')}}">Leaderboard</a>
                    </li>
                    <li class="nav-item">
                        @if (!Auth::check())
                            <a class="nav-link {{Route::is('sign-up') || Route::is('sign-in') ? "active" : ""}}" href="{{route('sign-in')}}">Sign In</a>
                        @else
                            <a class="nav-link {{Route::is('profile') ? "active" : ""}}" href="{{route('profile', Auth::id())}}">{{Auth::user()->username}}</a>
                        @endif
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
