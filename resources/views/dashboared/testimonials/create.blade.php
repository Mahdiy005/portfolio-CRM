@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2>Add New Testimonial</h2>
        @if (session('createTestiStatus'))
            <div class="alert alert-success">{{ session('createTestiStatus') }}</div>
        @endif
        <form action="{{ route('test-table.store') }}" method="POST">
            @csrf

            <!-- Message Input -->
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter the testimonial message"
                    required></textarea>
            </div>

            <!-- User Name Input -->
            <div class="mb-3">
                <label for="user_name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="user_name" name="user_name"
                    placeholder="Enter the user's name" required>
            </div>

            <!-- Position Input -->
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position"
                    placeholder="Enter the user's position (e.g., CEO, Manager)" required>
            </div>

            <input type="hidden" name="testimonial_section_id" value="1">
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Add Testimonial</button>
        </form>
    </div>
@endsection
