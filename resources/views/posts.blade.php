@extends('shared.layout')

@section('content')
    <div class="posts pb-4">
        @include('shared.navbar')

        <input type="text" hidden id="postsPage" value="posts">
        <div class="posts-container">
            <div class="posts-header-container">
                <p class="fs-5 mt-3 mb-0">Filter By:</p>
                <div class="posts-header">
                    <div class="posts-filter d-flex gap-4">
                        <div class="posts-select">
                            <span class="fs-6">Programming Language</span>
                            <select id="programming-language">
                                <option value="All" {{$programmingLanguage == "All" ? "selected" : ""}}>All</option>
                                <option value="C" {{$programmingLanguage == "C" ? "selected" : ""}}>C</option>
                                <option value="Python" {{$programmingLanguage == "Python" ? "selected" : ""}}>Python</option>
                                <option value="Java" {{$programmingLanguage == "Java" ? "selected" : ""}}>Java</option>
                            </select>
                        </div>
                        <div class="posts-select">
                            <span class="fs-6">Post Type</span>
                            <select id="post-type">
                                <option value="All" {{$postType == "All" ? "selected" : ""}}>All</option>
                                <option value="Error" {{$postType == "Error" ? "selected" : ""}}>Error</option>
                                <option value="Question" {{$postType == "Question" ? "selected" : ""}}>Question</option>
                                <option value="Discussion" {{$postType == "Discussion" ? "selected" : ""}}>Discussion</option>
                                <option value="Guide" {{$postType == "Guide" ? "selected" : ""}}>Guide</option>
                                <option value="Other" {{$postType == "Other" ? "selected" : ""}}>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="posts-search d-flex justify-content-end align-items-end">
                        <div class="d-flex align-items-center w-50 gap-2">
                            <input class="form-control w-100 border border-black rounded-pill" placeholder="Search Something"
                            name="postTitle" id="posts-search-title" value="{{$search}}"></input>
                            <button type="button" class="posts-search-btn" id="posts-search-btn"><i class="bi bi-search fs-4"></i></button>
                        </div>
                    </div>
                    <div class="posts-sort mt-1">
                        <div class="posts-select">
                            <span class="fs-5">Sort By:</span>
                            <select id="sort-by">
                                <option value="New" {{$sortBy == "New" ? "selected" : ""}}>New</option>
                                <option value="Old" {{$sortBy == "Old" ? "selected" : ""}}>Old</option>
                                <option value="Most Popular" {{$sortBy == "Most Popular" ? "selected" : ""}}>Most Popular</option>
                                <option value="Least Popular" {{$sortBy == "Least Popular" ? "selected" : ""}}>Least Popular</option>
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
                    <div class="card w-100 mt-3 ps-4 posts-content" data-category="{{ $post->category->id }}">
                        <div class="card-body" data-category="{{ $post->category->category_name }}">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex-flex-column mb-3">
                                    <a href="{{ route('post-detail', ['post' => $post]) }}"
                                        class="text-decoration-none text-dark">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                    </a>
                                    <div class="d-flex gap-3">
                                        <div data-category="{{ $post->category->id }}"
                                            class="category-container d-flex justify-content-center align-items-center">
                                            {{ $post->category->category_name }}
                                        </div>
                                        <div data-categorytype="{{ $post->categoryType->id }}"
                                            class="category-type-container d-flex justify-content-center align-items-center">
                                            {{ $post->categoryType->category_type_name }}
                                        </div>
                                    </div>
                                </div>

                                @if (Auth::check() && $post->user->id == Auth::user()->id)
                                    <div class="dropdown">
                                        <i class="bi bi-three-dots-vertical post-dropdown" data-bs-toggle="dropdown"></i>
                                        <ul class="dropdown-menu bg-white">
                                            <li><a class="dropdown-item" href="{{ route('post-edit', $post) }}"><i
                                                        class="bi bi-pen-fill"></i>
                                                    Update</a></li>
                                            <li><a class="dropdown-item" href="{{ route('post-delete', $post) }}"><i
                                                        class="bi bi-trash3"></i>
                                                    Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                @endif

                            </div>

                            <p class="card-text">{{ $post->content }}</p>
                            <div class="d-flex mt-3">
                                @if (Auth::check() && Auth::user()->forumLikes()->where('forum_id', $post->id)->exists())
                                    <a class="card-link d-flex justify-content-center gap-1 post-like"><i
                                            class="bi bi-heart-fill text-danger post-dislike-btn" data-post-id="{{ $post->id }}"></i>
                                        <span class="like-count">{{ $post->userLikes()->count() }}</span></a>
                                @elseif (Auth::check())
                                    <a class="card-link d-flex justify-content-center gap-1 post-like"><i
                                            class="bi bi-heart post-like-btn" data-post-id="{{ $post->id }}"></i>
                                        <span class="like-count">{{ $post->userLikes()->count() }}</span></a>
                                @else
                                    <a href="{{ route('sign-in') }}"
                                        class="card-link d-flex justify-content-center gap-1"><i
                                            class="bi bi-heart post-like-btn"></i>
                                        <span class="like-count">{{ $post->userLikes()->count() }}</span></a>
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
                    Recent Accessed Post
                </div>
            </div>
        </div>

    </div>
@endsection
