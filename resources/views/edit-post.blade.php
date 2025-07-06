@extends('shared.layout')

@section('content')
    <div class="create-post">
        @include('shared.navbar')

        <div class="d-flex justify-content-center">
            <div class="create-post-container mt-4">
                <h1 class="fw-bold">Edit Post</h1>

                <form action="{{route('post-edit', $post)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="postTitle" name="postTitle" required
                            value="{{ $post->title }}">
                        @error('postTitle')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex gap-5 mb-3">
                        <div class="mb-3 flex-grow-1">
                            <label for="programmingLanguage" class="form-label">Programming Language</label>
                            <select id="programmingLanguage" class="form-select" name="programmingLanguage" required>
                                @foreach ($categories as $category)
                                    {
                                    @if ($category->id == $post->category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endif
                                    }
                                @endforeach
                            </select>
                            @error('programmingLanguage')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 flex-grow-1">
                            <label for="postType" class="form-label">Post Type</label>
                            <select id="postType" class="form-select" name="postType" required>
                                @foreach ($categoryTypes as $categoryType)
                                    @if ($categoryType->id == $post->categoryType->id)
                                        <option value="{{ $categoryType->id }}" selected>
                                            {{ $categoryType->category_type_name }}</option>
                                    @else
                                        <option value="{{ $categoryType->id }}">
                                            {{ $categoryType->category_type_name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('postType')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4 d-flex flex-column">
                        <label for="image" class="form-label">Image</label>
                        <input id="image" type="file" name="image">
                        @error('image')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5 d-flex flex-column">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="5" name="content" class="p-2" required>{{ $post->content }}</textarea>
                        @error('content')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-3 justify-content-end">
                        <a href="{{route('posts')}}" class="btn btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-post">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
