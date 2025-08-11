@extends('shared.layout')

@section('content')
    <div class="post-detail d-flex flex-column">
        @include('shared.navbar')

        <input type="text" hidden id="postDetailPage" value="postDetail">
        @if (Auth::check())
            <input type="text" hidden id="username" value="{{Auth::user()->username}}">
        @endif
        <div class="post flex-grow-1 mt-3 align-self-center">
            @if (session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
            <p>Posted By {{ $post->user->username }}</p>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
            <div class="post-links d-flex  align-items-center mt-3 justify-content-between">
                @if (Auth::check() && Auth::user()->forumLikes()->where('forum_id', $post->id)->exists())
                    <a href="#" class="card-link d-flex justify-content-center gap-1 post-like"><i
                            class="bi bi-heart-fill text-danger"></i>
                        {{ $post->userLikes->count() }}</a>
                @elseif (Auth::check())
                    <a href="{{ route('post-like', ['post' => $post]) }}"
                        class="card-link d-flex justify-content-center gap-1 post-like"><i class="bi bi-heart"></i></i>
                        {{ $post->userLikes->count() }}</a>
                @else
                    <a href="{{ route('sign-in') }}" class="card-link d-flex justify-content-center gap-1 post-like"><i
                            class="bi bi-heart"></i></i>
                        {{ $post->userLikes->count() }}</a>
                @endif

                <div class="d-flex gap-2">
                    @if (Auth::check() && $post->user->id == Auth::user()->id)
                        <a href="{{ route('post-edit', $post) }}" class="card-link"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{ route('post-delete', $post) }}" class="card-link"><i class="bi bi-trash"></i></a>
                    @endif
                </div>
            </div>

            <div class="seperation my-3"></div>

            <form action="{{ route('comment', ['post' => $post]) }}" method="post">
                @csrf
                <div class="comment-container d-flex flex-column">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea name="comment" id="comment" rows="5" name="comment" class="p-2" required></textarea>
                </div>
                @if (Auth::check())
                    <button type="submit" class="btn btn-post mt-2">Post</button>
                @else
                    <a href="{{ route('sign-in') }}" class="btn btn-post mt-2">Comment</a>
                @endif

            </form>


            <div class="seperation my-3"></div>

            <span class="fs-5 comment-sort ">Sort By:</span>
            <select class="mb-3">
                <option value="1">Newest</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            @foreach ($comments as $comment)
                @include('comment')

                
                <span class="view-reply mt-2 d-block {{$comment->replies->count() > 0 ? '' : 'd-none'}}">View Reply ({{$comment->replies->count()}}) v</span> 
                
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
