@extends('dashboared.master')


@section('content')
    <div class="container mt-5">
        <h2>Post a New Blog</h2>
        @if (session('createBlogStatus'))
            <div class="alert alert-success">{{ session('createBlogStatus') }}</div>
        @endif
        <form action="{{ route('blog-table.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title Input -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter the blog title"
                    required>
            </div>

            <!-- User Name Input -->
            <div class="mb-3">
                <label for="user_name" class="form-label">Auther</label>
                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter your name"
                    required>
            </div>

            <!-- Content Input -->
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Write your blog content here"
                    required></textarea>
            </div>

            <!-- Image Input -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <input type="hidden" name="blog_section_id" value="1">

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Post Blog</button>
        </form>
    </div>
@endsection
