@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pakeisti studento duomenis</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('students.update', $student->id) }}">
                        @csrf @method("PUT")
                        <div class="form-group">
                            <label>Vardas: </label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                        </div>
                        <div class="form-group">
                            <label>Pavardė: </label>
                            <input type="text" name="surname" class="form-control" value="{{ $student->surname }}"> 
                        </div>
                        <div class="form-group">
                            <label>Projektas: </label>
                            <select name="project_id" id="" class="form-control">
                                 <option value="" selected disabled>Pasirinkite projektą</option>
                                 @foreach ($projects as $project)
                                <option value="{{ $project->id }}" @if($project->id == $student->project_id) selected="selected" @endif>{{ $project->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Išsaugoti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
