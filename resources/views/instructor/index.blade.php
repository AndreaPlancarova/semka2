@extends('layouts.app')

@section('content')
    <div class="container">
        @can('viewAny', \App\Models\User::class)
        <a href="{{route('instructor.create')}}" class="btn btn-primary btn-lg active" id="addInstructorButton" role="button" aria-pressed="true">Create new instructor</a>
        @endcan
    @foreach ($instructors as $instructor)

            <div class="container">
                <div class="card mb-3" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{$instructor->photo}}" class="card-img" id="obrProfilovka">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">{{$instructor->name}}</h1>
                                <p class="card-text">{{$instructor->description}}</p>
                                <p class="card-text"><small class="text-muted">Vek: {{$instructor->age}}</small></p>

                                @can('viewAny', \App\Models\User::class)
                                <a href="{{route('instructor.edit', [$instructor->id])}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                                <a href="{{route('instructor.delete', [$instructor->id])}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete</a>
                                @endcan
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection
