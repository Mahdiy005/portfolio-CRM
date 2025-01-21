@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Skill Section Headers</h1>
        @if (session('updateWorkSection'))
            <div class="alert alert-success">{{ session('updateWorkSection') }}</div>
        @endif
        <form enctype="multipart/form-data" method="POST" action="{{ route('work-section.updateWorkHeaders', ['id' => $workSection->id]) }}">
            @csrf
            @method('PUT')
            <!-- Title Input -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{ $workSection->title }}" type="text" class="form-control" id="title" name="title"
                    placeholder="Enter title">
                @error('title')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>

            <!-- Subtitle Input -->
            <div class="mb-3">
                <label for="sub_title" class="form-label">Sub Title</label>
                <input value="{{ $workSection->sub_title }}" type="text" class="form-control" id="sub_title"
                    name="sub_title" placeholder="Enter sub title">
                @error('sub_title')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>


            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
