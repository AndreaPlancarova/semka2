@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="{{route('message.create')}}" class="writeAMessage btn btn-primary btn-lg active" id="addInstructorButton" role="button" aria-pressed="true">Write a message</a>

    @foreach ($messages as $message)
        @if(@Auth::user()->id == $message->id || @Auth::user()->name == 'admin')
            <div class="container">
                <div class="messageBackround" >
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="mail card-title">From: {{$message->email}}</h1>
                                <p class="messageFont card-text">{{$message->description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <br>
        @endforeach


        <div id="message">

        </div >
    </div>



@endsection
