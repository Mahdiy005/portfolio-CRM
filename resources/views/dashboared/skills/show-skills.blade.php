@extends('dashboared.master')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">All Skills</h1>
        @if (session('deletedSkillStatus'))
           <div class="alert alert-success">{{ session('deletedSkillStatus') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Skill Name</th>
                    <th scope="col">Progress</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if (count($allSkills) > 0)
                    @foreach ($allSkills as $i=>$skill)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $skill->name }}</td>
                            <td>
                                <div class="progress" style="background-color: #222">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $skill->progress }}%;" aria-valuenow="{{ $skill->progress }}"
                                        aria-valuemin="0" aria-valuemax="100">{{ $skill->progress }}%</div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('skill-table.edit', ['id'=>$skill->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="javascript:$('form#del-skill-form-{{ $skill->id }}').submit()" class="btn btn-danger btn-sm">Delete</a>
                                <form action="{{ route('skill-table.destroy', ['id'=>$skill->id]) }}" method="post" id="del-skill-form-{{ $skill->id }}">@csrf @method('DELETE')</form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

@endsection
