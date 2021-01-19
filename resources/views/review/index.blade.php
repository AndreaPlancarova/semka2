@extends('layouts.app')

@section('content')
    <div class="container">
        @if(Auth::user())
            <a href="{{route('review.create')}}" class="btn btn-primary btn-lg active" id="createButton" role="button" aria-pressed="true">Create</a>
        @endif
        @foreach ($reviews as $review)
            <div class="container">
                <div class="card mb-3" >
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 id="reviewAuthor">{{$review->author}}</h1>
                                <p class="card-text">{{$review->description}}</p>
                                @if(@Auth::user()->id == $review->id || @Auth::user()->name == 'admin')
                                    <a href="{{route('review.edit', [$review->id])}}" class="btn btn-primary btn-lg active" id="editButton" role="button" aria-pressed="true">Edit</a>
                                    <a href="{{route('review.delete', [$review->id])}}" class="btn btn-primary btn-lg active" id="deleteButton" role="button" aria-pressed="true">Delete</a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection
