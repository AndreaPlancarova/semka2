@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('instructor.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a>

    @foreach ($instructors as $instructor)

            <div class="container">
                <div class="card mb-3" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{$instructor->photo}}" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title">{{$instructor->name}}</h1>
                                <p class="card-text">{{$instructor->description}}</p>
                                <p class="card-text"><small class="text-muted">Vek: {{$instructor->age}}</small></p>
                                <a href="{{route('instructor.edit', $instructor->id)}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
{{--                                <a href="?c=Zamestnanci&a=edit&id=<?= $zamestnanec->getId()?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Upravit</a>--}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Users') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        @can('create', \App\Models\User::class)--}}
{{--                            <div class="nb-3">--}}
{{--                                <a href="{{route("instructor.create")}}" class="btn btn-sm btn-success" role="button">Add new user</a>--}}
{{--                            </div>--}}
{{--                        @endcan--}}
{{--                        {!! $grid->show() !!}--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

