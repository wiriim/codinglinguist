@extends('shared.layout')

@section('content')
    <div class="post-detail d-flex flex-column">
        @if (Auth::check() && Auth::id() == 1)
            @include('shared.navbar-admin')
        @else
            @include('shared.navbar')
        @endif

        <input type="text" hidden id="postDetailPage" value="postDetail">
        @if (Auth::check())
            <input type="text" hidden id="username" value="{{ Auth::user()->username }}">
        @endif
        <div class="post flex-grow-1 mt-3 align-self-center">
            @if (session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
            <p>Posted By {{ $post->user->username }}</p>
            <h1>{{ $post->title }}</h1>
            @if ($post->image != null)
                <div class="post-image-container d-flex justify-content-center"><img src="/storage/{{ $post->image }}"
                        alt="image" class="post-image "></div>
            @endif
            <p>{{ $post->content }}</p>
            <div class="post-links d-flex  align-items-center mt-3 justify-content-between">
                @if (Auth::check() && Auth::user()->forumLikes()->where('forum_id', $post->id)->exists())
                    <a class="card-link d-flex justify-content-center gap-1 post-like"><i
                            class="bi bi-heart-fill text-danger post-dislike-btn" data-post-id="{{ $post->id }}"></i>
                        <span class="like-count">{{ $post->userLikes()->count() }}</span></a>
                @elseif (Auth::check())
                    <a class="card-link d-flex justify-content-center gap-1 post-like"><i class="bi bi-heart post-like-btn"
                            data-post-id="{{ $post->id }}"></i>
                        <span class="like-count">{{ $post->userLikes()->count() }}</span></a>
                @else
                    <a href="{{ route('sign-in') }}" class="card-link d-flex justify-content-center gap-1"><i
                            class="bi bi-heart post-like-btn"></i>
                        <span class="like-count">{{ $post->userLikes()->count() }}</span></a>
                @endif

                <div class="d-flex gap-2">
                    @if (Auth::check() && $post->user->id == Auth::user()->id)
                        <a href="{{ route('post-edit', $post) }}" class="card-link"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('post-delete', $post) }}" class="card-link"><i class="bi bi-trash"></i></a>
                    @elseif (Auth::check() && Auth::id() == 1)
                        <a href="{{ route('post-delete', $post) }}" class="card-link"><i class="bi bi-trash"></i></a>
                    @endif
                </div>
            </div>

            <div class="seperation my-3"></div>

            <form action="{{ route('comment', ['post' => $post]) }}" method="post">
                @csrf
                <div class="comment-container d-flex flex-column">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea name="comment" id="comment" rows="5" class="p-2" required>{{ old('comment') }}</textarea>
                    @error('comment')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                @if (Auth::check())
                    <button type="submit" class="btn btn-post mt-2">Post</button>
                @else
                    <a href="{{ route('sign-in') }}" class="btn btn-post mt-2">Comment</a>
                @endif
            </form>


            <div class="seperation my-3"></div>

            <span class="fs-5 comment-sort ">Sort By:</span>
            <select class="mb-3 comment-filter" data-post-id="{{ $post->id }}">
                <option value="Newest" {{ $filter == 'Newest' ? 'selected' : '' }}>Newest</option>
                <option value="Oldest" {{ $filter == 'Oldest' ? 'selected' : '' }}>Oldest</option>
                <option value="Most Popular" {{ $filter == 'Most Popular' ? 'selected' : '' }}>Most Popular</option>
                <option value="Least Popular" {{ $filter == 'Least Popular' ? 'selected' : '' }}>Least Popular</option>
            </select>
            @foreach ($comments as $comment)
                @include('comment')


                <span class="view-reply mt-2 d-block {{ $comment->replies->count() > 0 ? '' : 'd-none' }}">View Reply
                    ({{ $comment->replies->count() }}) v</span>

                <div class="replies-container ms-4" data-comment-id="{{ $comment->id }}">
                    @foreach ($comment->replies as $reply)
                        @include('reply')
                    @endforeach
                </div>
                <div class="seperation my-3"></div>
            @endforeach
        </div>
    </div>
@endsection
