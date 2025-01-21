@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Name Category</h2>
        @if (session('createCategoryStatus'))
            <div class="alert alert-success">{{ session('createCategoryStatus') }}</div>
        @endif
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Section Name:</label>
            <input type="text" name="name" id="name" required class="mb-3 form-control">

            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection
