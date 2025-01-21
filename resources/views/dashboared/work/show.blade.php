@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Categories</h2>

        @if (session('updateCategoryStatus'))
            <div class="alert alert-success">{{ session('updateCategoryStatus') }}</div>
        @endif
        @if (session('deleteCategoryStatus'))
            <div class="alert alert-success">{{ session('deleteCategoryStatus') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Related Work</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            @if ($category->workTables->isEmpty())
                                <span>No related work</span>
                            @else
                                <ul>
                                    @foreach ($category->workTables as $workTable)
                                        <li>{{ $workTable->name }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </td>
                        <td>
                            <!-- Update Button -->
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning btn-sm">Update</a>

                            <!-- Delete Form -->
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category and its related work?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
