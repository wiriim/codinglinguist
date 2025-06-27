@extends('shared.layout')

@section('content')
    <div class="create-post">
        @include('shared.navbar')

        <div class="d-flex justify-content-center">
            <div class="create-post-container mt-4">
                <h1 class="fw-bold">Create Post</h1>

                <form>
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Post Title</label>
                        <input type="text" class="form-control" id="postTitle">
                    </div>
                    <div class="d-flex gap-5 mb-3">
                        <div class="mb-3 flex-grow-1">
                            <label for="programmingLanguage" class="form-label">Programming Language</label>
                            <select id="programmingLanguage" class="form-select">
                                <option>Disabled select</option>
                            </select>
                        </div>
                        <div class="mb-3 flex-grow-1">
                            <label for="exampleInputPassword1" class="form-label">Post Type</label>
                            <select id="postType" class="form-select">
                                <option>Disabled select</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h3>Image</h3>
                        <input type="file">
                    </div>
                    <div class="mb-5 d-flex flex-column">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" id="content" rows="5"></textarea>
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