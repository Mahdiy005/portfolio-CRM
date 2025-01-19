@extends('dashboared.master')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Expertise Section Title and Sub-Title</h2>
            @if (session('updateExpertisSectionHedaerStatus'))
                <div class="alert alert-success">{{ session('updateExpertisSectionHedaerStatus') }}</div>
            @endif
            <form action="{{ route('experienc-section.upadate.headers', ['experiencSection'=>$data]) }}" method="POST">
                <!-- CSRF Token -->
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        type="text"
                        class="form-control"
                        id="title"
                        name="title"
                        placeholder="Enter Title"
                        value="{{ old('title', $data->title ?? '') }}"
                        required>
                </div>

                <!-- Sub-Title Field -->
                <div class="mb-3">
                    <label for="subtitle" class="form-label">Sub-Title</label>
                    <input
                        type="text"
                        class="form-control"
                        id="subtitle"
                        name="sub_title"
                        placeholder="Enter Sub-Title"
                        value="{{ old('subtitle', $data->sub_title ?? '') }}"
                        required>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
