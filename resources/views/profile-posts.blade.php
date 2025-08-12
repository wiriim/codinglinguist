@foreach ($posts as $post)
    <div class="profile-post-container">
        <div class="d-flex gap-3">
            <img src="" data-category="{{$post->category_id}}" width="60" height="60" class="profile-post-img">
            <a href="{{route('post-detail', $post)}}" class="profile-post-title">{{ $post->title }}</a>
        </div>

        <div class="profile-post-content mt-1">{{ $post->content }}</div>
    </div>
@endforeach
