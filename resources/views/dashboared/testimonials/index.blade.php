@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2>Testimonials</h2>
        @if (session('deleteTestimonialStatus'))
            <div class="alert alert-success">{{ session('deleteTestimonialStatus') }}</div>
        @endif
        <div class="row">
            @foreach ($testimonials as $testimonial)
                <div class="mb-4 col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <blockquote class="mb-0 blockquote">
                                <p class="text-muted">{{ $testimonial->message }}</p>
                                <footer class="mt-3 blockquote-footer">
                                    <strong>{{ $testimonial->user_name }}</strong>,
                                    <cite title="Position">{{ $testimonial->position }}</cite>
                                </footer>
                            </blockquote>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <!-- Update Button -->
                            <a href="{{ route('test-table.edit', $testimonial->id) }}"
                                class="btn btn-sm btn-warning">Update</a>

                            <!-- Delete Form -->
                            <form action="{{ route('test-table.destroy', $testimonial->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
