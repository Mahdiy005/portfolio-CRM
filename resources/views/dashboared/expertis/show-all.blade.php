@extends('dashboared.master')

@section('content')
    <div class="container py-4">
        @if (session('deleteExperienceStatus'))
            <div class="alert alert-success">{{ session('deleteExperienceStatus') }}</div>
        @endif
        <div class="row g-3">
            @if (count($data) > 0)
                @foreach ($data as $item)
                    <div class="col-md-4 my-4">
                        <div class="card h-100 text-center">
                            <div class="card-body">
                                <div style="font-size: 80px">{!! $item->icon !!}</div>
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                            <div class="mb-4 center">
                                <a href="{{ route('experienc.edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                                <a href="javascript:$('form#del-form-{{ $item->id }}').submit()" class="btn btn-danger">Delete</a>
                                <form action="{{ route('experienc.destroy', ['id'=>$item->id]) }}" id="del-form-{{ $item->id }}" method="POST" hidden>
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            <!-- Card Template -->

            <!-- Repeat cards dynamically here -->
        </div>
    </div>

@endsection
