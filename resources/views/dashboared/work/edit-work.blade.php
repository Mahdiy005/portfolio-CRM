@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2>Edit Work</h2>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Update Form -->
        <form action="{{ route('work.update', $workTable->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT method for updating -->

            <!-- Name -->
            <div class="form-group">
                <label for="name">Work Name:</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $workTable->name) }}" required>
            </div>

            <!-- GitHub Link -->
            <div class="mt-3 form-group">
                <label for="github_link">GitHub Link:</label>
                <input type="url" class="form-control" id="github_link" name="github_link"
                    value="{{ old('github_link', $workTable->github_link) }}" required>
            </div>

            <!-- Categories -->
            <div class="mt-3 form-group">
                <label for="categories">Categories:</label>
                <select class="form-control" id="categories" name="categories[]" multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ in_array($category->id, $workTable->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Display Current Technologies -->
            <div class="mt-3 form-group">
                <label for="tech_used">Technology Used:</label>
                <input type="text" class="form-control-file" id="tech_used" name="tech_used"
                    value="{{ $workTable->technologies()->pluck('name')->implode(', ') }}">
            </div>

            <!-- Current Image -->
            <div class="mt-3 form-group">
                <label>Current Image:</label>
                <div>
                    <img src="{{ asset('storage/projects/' . $workTable->image) }}" alt="Current Image"
                        class="img-thumbnail" style="max-width: 200px;">
                </div>
            </div>


            <!-- Upload New Image -->

            <!-- Submit Button -->
            <button type="submit" class="mt-4 btn btn-primary">Update Work</button>
            <a href="{{ route('work.index') }}" class="mt-4 btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
