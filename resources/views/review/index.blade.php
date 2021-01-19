@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('review.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a>

        @foreach ($reviews as $review)

            <div class="container">
                <div class="card mb-3" >
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">

                                <p class="card-text">{{$review->description}}</p>

{{--                                @can('viewAny', \App\Models\User::class)--}}
                                    <a href="{{route('review.edit', [$review->id])}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                                    <a href="{{route('review.delete', [$review->id])}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete</a>
{{--                                @endcan--}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection
