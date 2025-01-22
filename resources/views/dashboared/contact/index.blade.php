@extends('dashboared.master')

@section('content')
<div class="container mt-5">
    <h2>All Contacts</h2>
    @if (session('deleteStatus'))
    <div class="alert alert-success">{{ session('deleteStatus') }}</div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->mobile }}</td>
                <td>{{ $contact->message }}</td>
                <td>
                    <form action="{{ route('contact-table.destroyContact', ['id'=>$contact->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">No contacts found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
