@extends('shared.layout')

@section('content')
    <div class="posts pb-4">
        @include('shared.navbar')

        <div class="posts-container">

            <div class="posts-header-container">
                <p class="fs-5 mt-3 mb-0">Filter By:</p>
                <div class="posts-header">
                    <div class="posts-filter d-flex gap-4">
                        <div class="posts-select">
                            <span class="fs-6">Programming Language</span>
                            <select>
                                <option value="1">All</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="posts-select">
                            <span class="fs-6">Post Type</span>
                            <select>
                                <option value="1">All</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="posts-search d-flex justify-content-end align-items-end">
                        <input class="form-control w-50 border border-black rounded-pill" placeholder="Search Something"
                            href=""></input>
                    </div>
                    <div class="posts-sort mt-1">
                        <div class="posts-select">
                            <span class="fs-5">Sort By:</span>
                            <select>
                                <option value="1">Popularity</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="posts-add d-flex justify-content-end align-items-end">
                        <a href="{{ route('post-create') }}" class="btn btn-post w-50">+ Add New Post</a>
                    </div>
                </div>

            </div>
            <div class="posts-content-container">
                @if (session('success'))
                    <div class="alert alert-success mt-2">{{ session('success') }}</div>
                @endif
                @foreach ($posts as $post)
                    <div class="card w-100 mt-3 ps-4 posts-content">
                        <div class="card-body" data-category="{{ $post->category->category_name }}">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('post-detail', ['post' => $post]) }}"
                                    class="text-decoration-none text-dark">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </a>
                                @if (Auth::check() && $post->user->id == Auth::user()->id)
                                    <div class="dropdown">
                                        <i class="bi bi-three-dots-vertical post-dropdown" data-bs-toggle="dropdown"></i>
                                        <ul class="dropdown-menu bg-white">
                                            <li><a class="dropdown-item" href="{{ route('post-edit', $post) }}"><i
                                                        class="bi bi-pen-fill"></i>
                                                    Update</a></li>
                                            <li><a class="dropdown-item" href="{{route('post-delete', $post)}}"><i class="bi bi-trash3"></i>
                                                    Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                @endif

                            </div>

                            <p class="card-text">{{ $post->content }}</p>
                            <div class="d-flex mt-3">
                                @if (Auth::check() && Auth::user()->forumLikes()->where('forum_id', $post->id)->exists())
                                    <a href="{{ route('post-dislike', ['post' => $post]) }}"
                                        class="card-link d-flex justify-content-center gap-1 post-like"><i
                                            class="bi bi-heart-fill text-danger"></i>
                                        {{ $post->userLikes->count() }}</a>
                                @elseif (Auth::check())
                                    <a href="{{ route('post-like', ['post' => $post]) }}"
                                        class="card-link d-flex justify-content-center gap-1 post-like"><i
                                            class="bi bi-heart"></i></i>
                                        {{ $post->userLikes->count() }}</a>
                                @else
                                    <a href="{{ route('sign-in') }}"
                                        class="card-link d-flex justify-content-center gap-1 post-like"><i
                                            class="bi bi-heart"></i></i>
                                        {{ $post->userLikes->count() }}</a>
                                @endif
                                <a href="{{ route('post-detail', ['post' => $post]) }}"
                                    class="card-link d-flex justify-content-center gap-1"><i class="bi bi-chat"></i>
                                    {{ $post->comments->count() }}</a>
                            </div>
                            <p class="mt-2">Posted By {{ $post->user->username }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="posts-recent-container">
                <div class="posts-recent w-100 bg-white">
                    test
                </div>
            </div>
        </div>

    </div>
@endsection
