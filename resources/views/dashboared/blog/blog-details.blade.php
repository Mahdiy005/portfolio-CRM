<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $blog->title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS for Design -->
    <style>
        .blog-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .blog-card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .blog-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .blog-subtitle {
            font-size: 1.2rem;
            color: #6c757d;
        }
        .btn-action {
            font-size: 1.1rem;
            padding: 8px 15px;
        }
        .blog-text {
            font-size: 1.1rem;
            color: #495057;
        }
        .card-body {
            background-color: #f8f9fa;
        }
        .card-footer {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4 blog-title">{{ $blog->title }}</h1>

    <div class="card blog-card mb-5">
        <img src="{{ asset('storage/blogs/' . $blog->image) }}" class="blog-image card-img-center w-25 self-center" alt="Blog Image">
        <div class="card-body">
            <h5 class="blog-title">{{ $blog->title }}</h5>
            <p class="blog-text">{{ Str::limit($blog->content, 300) }}...</p>
            <small class="text-muted blog-subtitle">By {{ $blog->user_name }} | {{ $blog->created_at->format('M d, Y') }}</small>
        </div>
    </div>

    <a href="{{ route('home') }}" class="btn btn-secondary btn-action">Back to Blogs List</a>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
