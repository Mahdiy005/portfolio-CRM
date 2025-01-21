@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Name Category</h2>
        @if (session('createWorkStatus'))
            <div class="alert alert-success">{{ session('createWorkStatus') }}</div>
        @endif
        <form action="{{ route('work.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Section Name:</label>
            <input type="text" name="name" id="name" required class="mb-3 form-control">

            <label for="categories">Categories:</label>
            <select name="categories[]" id="categories" multiple class="mb-3 form-control">
                @if (count($categories) > 0)
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                @endif
            </select>

            <label for="image">Section Image:</label>
            <input type="file" name="image" id="image" class="mb-3 form-control">

            <label for="github_link">GitHub Link:</label>
            <input type="url" name="github_link" id="github_link" class="mb-3 form-control">
            <input type="hidden" name="work_section_id" value="1">
            <button type="submit" class="btn btn-primary">Add Project</button>
        </form>
    </div>
@endsection
