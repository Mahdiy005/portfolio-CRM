@extends('dashboared.master')


@section('content')
<div class="container mt-5">
    @if (session('updateBlogStatus'))
    <div class="alert alert-success">{{ session('updateBlogStatus') }}</div>
    @endif
    @if (session('deleteBlogStatus'))
    <div class="alert alert-success">{{ session('updateBlogStatus') }}</div>
    @endif
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Blog Image -->
                    <img
                        src="{{ asset('storage/blogs/' . $blog->image) }}"
                        class="card-img-top"
                        alt="{{ $blog->title }}"
                        style="height: 200px; object-fit: cover;">

                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text text-muted">By {{ $blog->user_name }}</p>
                        <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                    </div>

                    <!-- Card Footer with Actions -->
                    <div class="card-footer d-flex justify-content-between">
                        <!-- Update Action -->
                        <a href="{{ route('blog-table.edit', $blog->id) }}" class="btn btn-primary btn-sm">
                            Update
                        </a>

                        <!-- Delete Action -->
                        <form action="{{ route('blog-table.destroy', $blog->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this blog?');">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
