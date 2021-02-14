@extends('layouts.app')

@section('content')
    <div class="form-group text-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
<div class="container">
    <form method="post" action="{{$action}}">
        @csrf
        @method($method)

        <div class="form-group">
            <label for="description">Content</label>
            <input type="text" class="form-control" id="message" name="description" placeholder="Here you can write your message" value="{{@$model->description}}">

        </div>
        <div class="form-group">
            <input type="submit" id="submit" class="btn btn-primary form-control">
        </div>
    </form>
</div>

@endsection

