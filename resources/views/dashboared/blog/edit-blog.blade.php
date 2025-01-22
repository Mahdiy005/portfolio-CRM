@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2>Update Blog</h2>
        <form action="{{ route('blog-table.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Required for PUT requests -->

            <!-- Title Input -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}"
                    placeholder="Enter the blog title" required>
            </div>

            <!-- User Name Input -->
            <div class="mb-3">
                <label for="user_name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $blog->user_name }}"
                    placeholder="Enter your name" required>
            </div>

            <!-- Content Input -->
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Write your blog content here"
                    required>{{ $blog->content }}</textarea>
            </div>

            <!-- Image Preview -->
            <div class="mb-3">
                <label for="current_image" class="form-label">Current Image</label>
                <div>
                    <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="Blog Image" style="width: 200px;">
                </div>
            </div>

            <!-- Image Input -->
            <div class="mb-3">
                <label for="image" class="form-label">New Image (optional):</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Update Blog</button>
        </form>
    </div>
@endsection
