@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
{{--                        @auth--}}
                        @can('viewAny', \App\Models\User::class)
                            <div class="nb-3">
                                <a href="{{route("user.create")}}" class="btn btn-sm btn-success" id="addUserButton" role="button">Add new user</a>
                            </div>
                            @endcan
                        {!! $grid->show() !!}

{{--                            @endauth--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
