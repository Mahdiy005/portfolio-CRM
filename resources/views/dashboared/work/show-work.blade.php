@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">WorkTable List</h2>

        <!-- Success message -->
        @if (session('deleteWorkStatus'))
            <div class="alert alert-success">
                {{ session('deleteWorkStatus') }}
            </div>
        @endif
        @if (session('updateWorkStatus'))
            <div class="alert alert-success">
                {{ session('updateWorkStatus') }}
            </div>
        @endif

        <div class="row">
            @forelse ($workTables as $work)
                <div class="mb-4 col-md-4">
                    <div class="card h-100">
                        <!-- Image -->
                        <img src="{{ asset('storage/projects/' . $work->image) }}" class="card-img-top"
                            alt="{{ $work->name }}">

                        <!-- Card Body -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $work->name }}</h5>
                            <p class="card-text">
                                <strong>GitHub Link:</strong>
                                <a href="{{ $work->github_link }}" target="_blank">{{ $work->github_link }}</a>
                            </p>
                        </div>

                        <!-- Card Footer with Actions -->
                        <div class="text-center card-footer">
                            <a href="{{ route('work.edit', $work->id) }}" class="btn btn-warning btn-sm">Update</a>
                            <form action="{{ route('work.destroy', $work->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this work?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">No work found.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
