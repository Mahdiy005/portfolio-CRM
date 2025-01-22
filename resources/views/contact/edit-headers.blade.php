@extends('dashboared.master')

@section('content')
<div class="container mt-5">
    <h2>Edit Contact Headers</h2>
    @if(session('updateContactHeaders'))
        <div class="alert alert-success">
            {{ session('updateContactHeaders') }}
        </div>
    @endif
    <form action="{{ route('contact-section.updateHeaders', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $contact->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="sub_title" class="form-label">Sub Title</label>
            <input type="text" name="sub_title" id="sub_title" class="form-control" value="{{ old('sub_title', $contact->sub_title) }}">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $contact->location) }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $contact->email) }}">
        </div>
        <div class="mb-3">
            <label for="site_link" class="form-label">Site Link</label>
            <input type="url" name="site_link" id="site_link" class="form-control" value="{{ old('site_link', $contact->site_link) }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
