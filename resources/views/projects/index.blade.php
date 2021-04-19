@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Aprašymas</th>
            <th>Veiksmai</th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>
                <form action={{ route('projects.destroy', $project->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('projects.edit', $project->id) }}>Redaguoti</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Trinti"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('projects.create') }}" class="btn btn-success">Pridėti</a>
    </div>
</div>
@endsection
