@extends('shared.layout')

@section('content')
    <div class="post-detail d-flex flex-column">
        @include('shared.navbar')

        <div class="post flex-grow-1 mt-3 align-self-center">
            <p>Posted By {{$post->user->username}}</p>
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
            <div class="post-links d-flex  align-items-center mt-3 justify-content-between">
                <a href="#" class="card-link gap-1 d-flex align-items-center mt-1"><img
                        src="{{asset('images/heart.svg')}}" alt="heart" width="20">
                    {{$post->userLikes->count()}}</a>

                <div class="d-flex gap-2">
                    <a href="#" class="card-link"><img src="{{asset('images/edit.svg')}}"
                            alt="edit" width="20"></a>
                    <a href="#" class="card-link"><img
                            src="{{asset('images/trash-2.svg')}}" alt="trash" width="20"></a>
                </div>
            </div>

            <div class="seperation my-3"></div>

            <div class="comment-container d-flex flex-column">
                <label for="comment" class="form-label">Comment</label>
                <textarea name="comment" id="comment" rows="5" name="comment" class="p-2" required></textarea>
            </div>
            <button type="submit" class="btn btn-post mt-2">Post</button>

            <div class="seperation my-3"></div>

            <span class="fs-5 comment-sort">Sort By:</span>
                            <select>
                                <option value="1">Newest</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
            @foreach ($comments as $comment)

            @endforeach
        </div>
    </div>

@endsection