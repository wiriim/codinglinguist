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
                        <button type="submit" class="btn btn-post w-50">+ Add New Post</button>
                    </div>
                </div>

            </div>
            <div class="posts-content-container">
                @foreach ($posts as $post)
                    <div class="card w-100 mt-3 ps-4 posts-content">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="#" class="card-link">Like - 10</a>
                            <a href="#" class="card-link mt-2">Comment - 10</a>
                            <p class="mt-2">Posted By {{$post->user->username}}</p>
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