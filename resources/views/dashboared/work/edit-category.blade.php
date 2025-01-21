@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2>Edit Category</h2>

        <!-- Display validation errors if any -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('category.update', ['id'=>$category->id]) }}" method="POST">
            @csrf
            @method('PUT')  <!-- Use PUT method for update -->

            <div class="form-group">
                <label for="name">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
            </div>

            <button type="submit" class="mt-3 btn btn-primary">Update Category</button>
            <a href="{{ route('category.show') }}" class="mt-3 btn btn-secondary">Back to Categories</a>
        </form>
    </div>
@endsection
