@extends('shared.layout')

@section('content')
    <div class="create-post">
        @include('shared.navbar')

        <div class="d-flex justify-content-center">
            <div class="create-post-container mt-4">
                <h1 class="fw-bold">Create Post</h1>

                <form action="{{route('create-post')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="postTitle" name="postTitle" required>
                    </div>
                    <div class="d-flex gap-5 mb-3">
                        <div class="mb-3 flex-grow-1">
                            <label for="programmingLanguage" class="form-label">Programming Language</label>
                            <select id="programmingLanguage" class="form-select" name="programmingLanguage" required>
                                @foreach($categories as $category){
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                }
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 flex-grow-1">
                            <label for="postType" class="form-label">Post Type</label>
                            <select id="postType" class="form-select" name="postType" required>
                                @foreach ($categoryTypes as $categoryType)
                                    <option value="{{$categoryType->category_type_name}}">{{$categoryType->category_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4 d-flex flex-column">
                        <label for="image" class="form-label">Image</label>
                        <input id="image" type="file" name="image">
                    </div>
                    <div class="mb-5 d-flex flex-column">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="5" name="content" class="p-2" required></textarea>
                    </div>

                    <div class="d-flex gap-3 justify-content-end">
                        <a href="#" class="btn btn-cancel">Cancel</a>
                        <button type="submit" class="btn btn-post">Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection