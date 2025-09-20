<div class="reply-wrapper">
    <div class="d-flex gap-2 align-items-center justify-content-between mt-2">
        @if (Auth::check() && ($reply->user->id == Auth::user()->id || Auth::id() == 1))
            <p class="fs-5">{{ $reply->user->username }}</p>
            <div class="d-flex gap-3">
                <i class="bi bi-pencil-square reply-edit-btn"></i>
                <a href="{{route('reply-delete', $reply->id)}}" class="card-link"><i class="bi bi-trash"></i></a>
            </div>
        @else
            <p class="fs-5">{{ $reply->user->username }}</p>
        @endif
    </div>

    <textarea class="mt-1 comment-reply-content" disabled data-reply-id="{{$reply->id}}">{{ $reply->content }}</textarea>
    <div class="d-flex mt-2 flex-column">
        @if (Auth::check() && Auth::user()->replyLikes()->where('reply_id', $reply->id)->exists())
            <div class="reply-btn-container d-flex gap-3">
                <a class="card-link d-flex justify-content-center gap-1 reply-like"><i
                        class="bi bi-heart-fill text-danger reply-dislike-btn"
                        data-comment-id="{{ $comment->id }}"  data-reply-id="{{$reply->id}}"></i>
                    <span class="like-count">{{ $reply->userLikes->count() }}</span></a>


                <a class="card-link d-flex justify-content-center gap-1"><i
                        class="bi bi-chat reply-reply-btn" data-comment-id="{{ $comment->id }}"  data-reply-id="{{$reply->id}}"></i></a>
                <p>{{ $reply->created_at->format('d/m/Y') }}</p>
            </div>
            <div class="reply-container d-flex flex-column mt-2 d-none" data-comment-id="{{ $comment->id }}" data-reply-id="{{$reply->id}}">
                <textarea rows="5" name="reply" class="reply p-2" data-comment-id="{{ $comment->id }}" data-reply-id="{{$reply->id}}" maxlength="100"></textarea>
                <div class="d-flex gap-3 justify-content-end mt-2">
                    <button type="button" class="btn btn-cancel reply-cancel">Cancel</button>
                    <button type="button" class="btn btn-post reply-save" data-comment-id="{{ $comment->id }}"  data-reply-id="{{$reply->id}}">Save</button>
                </div>
            </div>
        @elseif (Auth::check())
            <div class="reply-btn-container d-flex gap-3">
                <a class="card-link d-flex justify-content-center gap-1 reply-like"><i
                        class="bi bi-heart reply-like-btn" data-comment-id="{{ $comment->id }}"  data-reply-id="{{$reply->id}}"></i>
                    <span class="like-count">{{ $reply->userLikes->count() }}</span></a>


                <a class="card-link d-flex justify-content-center gap-1"><i
                        class="bi bi-chat reply-reply-btn" data-comment-id="{{ $comment->id }}"  data-reply-id="{{$reply->id}}"></i></a>
                <p>{{ $reply->created_at->format('d/m/Y') }}</p>
            </div>
            <div class="reply-container d-flex flex-column mt-2 d-none" data-comment-id="{{ $comment->id }}" data-reply-id="{{$reply->id}}">
                <textarea rows="5" name="reply" class="p-2 reply" data-comment-id="{{ $comment->id }}"  data-reply-id="{{$reply->id}}" maxlength="100"></textarea>
                <div class="d-flex gap-3 justify-content-end mt-2">
                    <button type="button" class="btn btn-cancel reply-cancel">Cancel</button>
                    <button type="button" class="btn btn-post reply-save" data-comment-id="{{ $comment->id }}"  data-reply-id="{{$reply->id}}">Save</button>
                </div>
            </div>
        @else
            <div class="reply-btn-container d-flex gap-3">
                <a href="{{ route('sign-in') }}" class="card-link d-flex justify-content-center gap-1"><i
                        class="bi bi-heart reply-like-btn"></i>
                    <span class="like-count">{{ $reply->userLikes->count() }}</span></a>
                <a href="{{ route('sign-in') }}" class="card-link d-flex justify-content-center gap-1"><i
                        class="bi bi-chat reply-reply-btn"></i></a>
                <p>{{ $reply->created_at->format('d/m/Y') }}</p>
            </div>
        @endif
    </div>
</div>
