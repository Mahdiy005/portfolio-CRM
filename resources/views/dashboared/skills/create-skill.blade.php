@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create New Skill </h1>
        @if (session('createSkillSection'))
            <div class="alert alert-success">{{ session('createSkillSection') }}</div>
        @endif
        <form enctype="multipart/form-data" method="POST" action="{{ route('skill-table.store') }}">
            @csrf
            <!-- Name Input -->
            <div class="mb-3">
                <label for="name" class="form-label">Skill Name</label>
                <input value="{{ old('name') }}" type="text" class="form-control" id="name" name="name"
                    placeholder="Enter Skill Name">
                @error('name')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>

            <!-- Progress Input -->
            <div class="mb-3">
                <label for="progress" class="form-label">Progress</label>
                <input value="{{ old('progress') }}" type="number" class="form-control" id="progress" max="100" min="10"
                    name="progress" placeholder="Enter Progress">
                @error('progress')
                    <div style="color: red; font-size: 12px">{{ $message }}</div>
                @enderror
            </div>

            <input type="hidden" name="section_skill_id" value="1">

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
