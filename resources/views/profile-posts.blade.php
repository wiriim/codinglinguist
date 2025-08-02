@foreach ($posts as $post)
    <div class="profile-post-container">
        <div class="d-flex gap-3">
            <img src="{{ asset('images/Python.png') }}" alt="C_Programming_Language" width="45" height="45">
            <div class="profile-post-title">{{ $post->title }}</div>
        </div>

        <div class="profile-post-content mt-1">{{ $post->content }}</div>
    </div>
@endforeach
