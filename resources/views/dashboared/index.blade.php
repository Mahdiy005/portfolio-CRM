@extends('dashboared.master')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4">Section Details</h2>
        @if (session('landinUpdateStatus'))
            <div class="alert alert-success">{{ session('landinUpdateStatus') }}</div>
        @endif
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Field</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Title</td>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>{{ $data->description }}</td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td>
                        <img src="{{ asset("storage/landing_image/$data->image") }}" alt="Section Image" width="200px" class="rounded img-fluid">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <a href="mailto:example@example.com" class="text-primary">{{ $data->email }}</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
