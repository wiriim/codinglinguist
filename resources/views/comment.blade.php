<div class="d-flex gap-2 align-items-center justify-content-between">
    @if (Auth::check() && ($comment->user->id == Auth::user()->id || Auth::id() == 1))
        <p class="fs-5">{{ $comment->user->username }}</p>
        <a href="{{ route('comment-delete', $comment) }}" class="card-link"><i class="bi bi-trash"></i></a>
    @else
        <p class="fs-5">{{ $comment->user->username }}</p>
    @endif
</div>

<textarea class="mt-1 comment-reply-content" disabled>{{ $comment->content }}</textarea>
<div class="d-flex mt-2 flex-column">
    @if (Auth::check() && Auth::user()->commentLikes()->where('comment_id', $comment->id)->exists())
        <div class="comment-btn-container d-flex gap-3">
            <a class="card-link d-flex justify-content-center gap-1 comment-like"><i
                    class="bi bi-heart-fill text-danger comment-dislike-btn"
                    data-comment-id="{{ $comment->id }}"></i>
                <span class="like-count">{{ $comment->userLikes->count() }}</span></a>


            <a class="card-link d-flex justify-content-center gap-1"><i
                    class="bi bi-chat comment-reply-btn" data-comment-id="{{ $comment->id }}"></i>
                <span class="reply-count">{{ $comment->replies->count() }}</span></a>
            <p>{{ $comment->created_at->format('d/m/Y') }}</p>
        </div>
        <div class="reply-container d-flex flex-column mt-2 d-none" data-comment-id="{{ $comment->id }}">
            <textarea rows="5" name="reply" class="reply p-2" data-comment-id="{{ $comment->id }}" maxlength="100"></textarea>
            <div class="d-flex gap-3 justify-content-end mt-2">
                <button type="button" class="btn btn-cancel reply-cancel">Cancel</button>
                <button type="button" class="btn btn-post reply-save" data-comment-id="{{ $comment->id }}">Save</button>
            </div>
        </div>
    @elseif (Auth::check())
        <div class="comment-btn-container d-flex gap-3">
            <a class="card-link d-flex justify-content-center gap-1 comment-like"><i
                    class="bi bi-heart comment-like-btn" data-comment-id="{{ $comment->id }}"></i>
                <span class="like-count">{{ $comment->userLikes->count() }}</span></a>


            <a class="card-link d-flex justify-content-center gap-1"><i
                    class="bi bi-chat comment-reply-btn" data-comment-id="{{ $comment->id }}"></i>
                <span class="reply-count">{{ $comment->replies->count() }}</span></a>
            <p>{{ $comment->created_at->format('d/m/Y') }}</p>
        </div>
        <div class="reply-container d-flex flex-column mt-2 d-none" data-comment-id="{{ $comment->id }}">
            <textarea rows="5" name="reply" class="p-2 reply" data-comment-id="{{ $comment->id }}" maxlength="100"></textarea>
            <div class="d-flex gap-3 justify-content-end mt-2">
                <button type="button" class="btn btn-cancel reply-cancel">Cancel</button>
                <button type="button" class="btn btn-post reply-save" data-comment-id="{{ $comment->id }}">Save</button>
            </div>
        </div>
    @else
        <div class="comment-btn-container d-flex gap-3">
            <a href="{{ route('sign-in') }}" class="card-link d-flex justify-content-center gap-1"><i
                    class="bi bi-heart comment-like-btn"></i>
                <span class="like-count">{{ $comment->userLikes->count() }}</span></a>
            <a href="{{ route('sign-in') }}" class="card-link d-flex justify-content-center gap-1"><i
                    class="bi bi-chat comment-reply-btn"></i>
                <span class="reply-count">{{ $comment->replies->count() }}</span></a>
            <p>{{ $comment->created_at->format('d/m/Y') }}</p>
        </div>
    @endif
</div>
