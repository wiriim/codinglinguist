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
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('admin-ban') ? "active" : ""}}" href="{{route('admin-ban')}}">Ban</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('admin-unban') ? "active" : ""}}" href="{{route('admin-unban')}}">Unban</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::is('posts') ? "active" : ""}}" href="{{route('posts')}}">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
