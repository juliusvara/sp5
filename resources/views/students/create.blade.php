@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Pridėti studentą: </div>
               <div class="card-body">
                   <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Vardas: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Pavardė: </label>
                            <input type="text" name="surname" class="form-control"> 
                        </div>
                        <div class="form-group">
                            <label>Projektas: </label>
                            <select name="project_id" id="" class="form-control">
                                 <option value="" selected disabled>Pasirinkite projektą</option>
                                 @foreach ($projects as $project)
                                 <option value="{{ $project->id }}">{{ $project->title }}</option>
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
@endsection
