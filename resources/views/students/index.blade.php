@extends('layouts.app')
@section('content')
<div class="card-body">
    <form class="form-inline" action="{{ route('students.index') }}" method="GET">
        <select name="project_id" id="" class="form-control">
            <option value="" selected disabled>Pasirinkite projektą filtravimui:</option>
            @foreach ($projects as $project)
            <option value="{{ $project->id }}" 
                @if($project->id == app('request')->input('project_id')) 
                    selected="selected" 
                @endif>{{ $project->title }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Išsaugoti</button>
    </form>
</div>
<div class="card-body">
    @if($errors->any())
    <h4 style="color: red">{{$errors->first()}}</h4>
    @endif
    <table class="table">
        <tr>
            <th>Vardas</th>
            <th>Pavardė</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->project->title }}</td>
            <td>
                <form action={{ route('students.destroy', $student->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('students.edit', $student->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('students.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
