@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Redaguoti projektą</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('projects.update', $project->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label for="">Pavadinimas</label>
                            <input type="text" name="title" class="form-control" value="{{ $project->title }}">
                        </div>
                        <div class="form-group">
                            <label for="">Aprašymas</label>
                            <textarea type="text" name="description" rows=10 cols=100 class="form-control">{{ $project->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Išsaugoti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
