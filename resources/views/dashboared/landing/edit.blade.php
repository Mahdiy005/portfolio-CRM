@extends('dashboared.master')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4">Edit Landing Section</h2>
        <form action="{{ route('landing.update', ['landingSection'=>$data]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ $data->name }}" id="name" name="name" placeholder="Enter the title"
                    required>
                @error('name')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter the description"
                    required> {{ $data->description }}</textarea>
                @error('description')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="{{ $data->email }}" type="email" class="form-control" id="email" name="email" placeholder="Enter the email"
                    required>
                @error('email')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @error('image')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
