@extends('dashboared.master')

@section('content')


<div class="container">
    <h2 class="text-center mb-4">Edit Experinec</h2>
    @if (session('updateSingleExperienceStatus'))
        <div class="alert alert-success">{{ session('updateSingleExperienceStatus') }}</div>
    @endif
    <form action="{{ route('experienc.update', ['id'=>$experienc->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Icon Field -->
        <div class="mb-3">
            <label for="icon" class="form-label">Icon (URL or Class)</label>
            <input type="text" class="form-control" id="icon" value="{{ $experienc->icon }}" name="icon" placeholder="Enter icon URL or class" required>
            @error('icon')
                <div style="color: red; font-size: 12px">{{ $message }}</div>
            @enderror
        </div>


        <!-- Title Field -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" value="{{ $experienc->title }}" id="title" name="title" placeholder="Enter title" required>
            @error('title')
            <div style="color: red; font-size: 12px">{{ $message }}</div>
        @enderror
        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter description" required>{{ $experienc->description }}</textarea>
            @error('description')
            <div style="color: red; font-size: 12px">{{ $message }}</div>
        @enderror
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </form>
</div>

@endsection
