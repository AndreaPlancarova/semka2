@extends('layouts.app')

@section('content')

<div class="container">
    <h1><b>{{ __('Edit new review') }}</b></h1>
</div>


@include('review.form')

@endsection
