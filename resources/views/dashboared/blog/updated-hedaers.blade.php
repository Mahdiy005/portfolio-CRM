@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2>Update Testimonials Headers</h2>
        @if (session('updateBlogHeadersStatus'))
           <div class="alert alert-success">{{ session('updateBlogHeadersStatus') }}</div>
        @endif
        <form action="{{ route('blog-section.updateHeadrs', $blogSection->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $blogSection->title }}" required>
            </div>

            <!-- Subtitle Input -->
            <div class="mb-3">
                <label for="sub_title" class="form-label">Subtitle</label>
                <input type="text" class="form-control" id="sub_title" name="sub_title" value="{{ $blogSection->sub_title }}"
                    required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
