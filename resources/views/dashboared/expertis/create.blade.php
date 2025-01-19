@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Create New Expertise </h2>
                @if (session('createExpertisStatus'))
                    <div class="alert alert-success">{{ session('createExpertisStatus') }}</div>
                @endif
                <form action="{{ route('experienc.store') }}" method="POST">
                    <!-- CSRF Token -->
                    @csrf

                    <!-- Title Field -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"
                            value="{{ old('title') }}" required>
                        @error('title')
                            <div style="color: red; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>


                    <!-- Sub-Title Field -->
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Icon</label>
                        <input type="text" class="form-control" id="subtitle" name="icon"
                            placeholder="Enter Icon Link" value="{{ old('icon') }}" required>
                        @error('icon')
                            <div style="color: red; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Description</label>
                        <input type="text" class="form-control" id="subtitle" name="description"
                            placeholder="Enter Description" value="{{ old('description') }}" required>

                        @error('description')
                            <div style="color: red; font-size: 12px">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="hidden" name="experince_section_id" value="1">

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
